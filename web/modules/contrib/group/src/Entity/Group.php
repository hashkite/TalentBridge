<?php

namespace Drupal\group\Entity;

use Drupal\Core\Entity\EditorialContentEntityBase;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\user\EntityOwnerTrait;
use Drupal\user\StatusItem;
use Drupal\user\UserInterface;

/**
 * Defines the Group entity.
 *
 * @ingroup group
 *
 * @ContentEntityType(
 *   id = "group",
 *   label = @Translation("Group"),
 *   label_singular = @Translation("group"),
 *   label_plural = @Translation("groups"),
 *   label_collection = @Translation("Groups"),
 *   label_count = @PluralTranslation(
 *     singular = "@count group",
 *     plural = "@count groups"
 *   ),
 *   bundle_label = @Translation("Group type"),
 *   handlers = {
 *     "storage" = "Drupal\group\Entity\Storage\GroupStorage",
 *     "view_builder" = "Drupal\group\Entity\ViewBuilder\GroupViewBuilder",
 *     "views_data" = "Drupal\group\Entity\Views\GroupViewsData",
 *     "list_builder" = "Drupal\group\Entity\Controller\GroupListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\group\Entity\Routing\GroupRouteProvider",
 *       "revision" = "\Drupal\entity\Routing\RevisionRouteProvider",
 *     },
 *     "form" = {
 *       "add" = "Drupal\group\Entity\Form\GroupForm",
 *       "edit" = "Drupal\group\Entity\Form\GroupForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm",
 *     },
 *     "access" = "Drupal\group\Entity\Access\GroupAccessControlHandler",
 *   },
 *   base_table = "groups",
 *   data_table = "groups_field_data",
 *   revision_table = "groups_revision",
 *   revision_data_table = "groups_field_revision",
 *   show_revision_ui = TRUE,
 *   translatable = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "uuid" = "uuid",
 *     "owner" = "uid",
 *     "langcode" = "langcode",
 *     "bundle" = "type",
 *     "label" = "label",
 *     "published" = "status",
 *     "revision" = "revision_id",
 *   },
 *   revision_metadata_keys = {
 *     "revision_user" = "revision_user",
 *     "revision_created" = "revision_created",
 *     "revision_log_message" = "revision_log_message",
 *   },
 *   links = {
 *     "add-form" = "/group/add/{group_type}",
 *     "add-page" = "/group/add",
 *     "canonical" = "/group/{group}",
 *     "collection" = "/admin/group",
 *     "edit-form" = "/group/{group}/edit",
 *     "delete-form" = "/group/{group}/delete",
 *     "version-history" = "/group/{group}/revisions",
 *     "revision" = "/group/{group}/revisions/{group_revision}/view",
 *     "revision-revert-form" = "/group/{group}/revisions/{group_revision}/revert",
 *     "revision-delete-form" = "/group/{group}/revisions/{group_revision}/delete",
 *   },
 *   bundle_entity_type = "group_type",
 *   field_ui_base_route = "entity.group_type.edit_form",
 *   permission_granularity = "bundle"
 * )
 */
class Group extends EditorialContentEntityBase implements GroupInterface {

  use EntityOwnerTrait;

  /**
   * Gets the group membership loader.
   *
   * @return \Drupal\group\GroupMembershipLoaderInterface
   *   The group.membership_loader service.
   */
  protected function membershipLoader() {
    return \Drupal::service('group.membership_loader');
  }

  /**
   * Gets the group permission checker.
   *
   * @return \Drupal\group\Access\GroupPermissionCheckerInterface
   *   The group_permission.checker service.
   */
  protected function groupPermissionChecker() {
    return \Drupal::service('group_permission.checker');
  }

  /**
   * Gets the relationship storage.
   *
   * @return \Drupal\group\Entity\Storage\GroupRelationshipStorageInterface
   *   The relationship storage.
   */
  protected function relationshipStorage() {
    return $this->entityTypeManager()->getStorage('group_content');
  }

  /**
   * {@inheritdoc}
   */
  public function getCreatedTime() {
    return $this->get('created')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function getChangedTime() {
    return $this->get('changed')->value;
  }

  /**
   * {@inheritdoc}
   */
  public function getGroupType() {
    return $this->type->entity;
  }

  /**
   * {@inheritdoc}
   */
  public function addRelationship(EntityInterface $entity, $plugin_id, $values = []) {
    $storage = $this->relationshipStorage();
    $relationship = $storage->createForEntityInGroup($entity, $this, $plugin_id, $values);
    $storage->save($relationship);
    return $relationship;
  }

  /**
   * {@inheritdoc}
   */
  public function getRelationships($plugin_id = NULL) {
    return $this->relationshipStorage()->loadByGroup($this, $plugin_id);
  }

  /**
   * {@inheritdoc}
   */
  public function getRelationshipsByEntity(EntityInterface $entity, $plugin_id = NULL) {
    return $this->relationshipStorage()->loadByEntityAndGroup($entity, $this, $plugin_id);
  }

  /**
   * {@inheritdoc}
   */
  public function getRelatedEntities($plugin_id = NULL) {
    $entities = [];

    foreach ($this->getRelationships($plugin_id) as $relationship) {
      $entities[] = $relationship->getEntity();
    }

    return $entities;
  }

  /**
   * {@inheritdoc}
   */
  public function addMember(UserInterface $account, $values = []) {
    if (!$this->getMember($account)) {
      $this->addRelationship($account, 'group_membership', $values);
    }
  }

  /**
   * {@inheritdoc}
   */
  public function removeMember(UserInterface $account) {
    if ($member = $this->getMember($account)) {
      $member->getGroupRelationship()->delete();
    }
  }

  /**
   * {@inheritdoc}
   */
  public function getMember(AccountInterface $account) {
    return $this->membershipLoader()->load($this, $account);
  }

  /**
   * {@inheritdoc}
   */
  public function getMembers($roles = NULL) {
    return $this->membershipLoader()->loadByGroup($this, $roles);
  }

  /**
   * {@inheritdoc}
   */
  public function hasPermission($permission, AccountInterface $account) {
    return $this->groupPermissionChecker()->hasPermissionInGroup($permission, $account, $this);
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);
    $fields += static::ownerBaseFieldDefinitions($entity_type);

    // @todo Remove the usage of StatusItem in
    //   https://www.drupal.org/project/drupal/issues/2936864.
    assert($fields['status'] instanceof BaseFieldDefinition);
    $data_definition = $fields['status']->getItemDefinition();
    assert($data_definition instanceof DataDefinition);
    $data_definition->setClass(StatusItem::class);
    $fields['status']
      ->setDisplayOptions('form', [
        'type' => 'boolean_checkbox',
        'settings' => [
          'display_label' => TRUE,
        ],
        'weight' => 120,
      ])
      ->setDisplayConfigurable('form', TRUE);

    $fields['label'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Title'))
      ->setRequired(TRUE)
      ->setTranslatable(TRUE)
      ->setSetting('max_length', 255)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -5,
      ])
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('view', TRUE)
      ->setDisplayConfigurable('form', TRUE)
      ->setRevisionable(TRUE);

    assert($fields['uid'] instanceof BaseFieldDefinition);
    $fields['uid']
      ->setLabel(t('Group creator'))
      ->setDescription(t('The username of the group creator.'))
      ->setDisplayConfigurable('view', TRUE)
      ->setDisplayConfigurable('form', TRUE)
      ->setRevisionable(TRUE);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Created on'))
      ->setDescription(t('The time that the group was created.'))
      ->setTranslatable(TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'region' => 'hidden',
        'weight' => 0,
      ])
      ->setDisplayConfigurable('view', TRUE)
      ->setRevisionable(TRUE);

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Changed on'))
      ->setDescription(t('The time that the group was last edited.'))
      ->setTranslatable(TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'region' => 'hidden',
        'weight' => 0,
      ])
      ->setDisplayConfigurable('view', TRUE)
      ->setRevisionable(TRUE);

    if (\Drupal::moduleHandler()->moduleExists('path')) {
      $fields['path'] = BaseFieldDefinition::create('path')
        ->setLabel(t('URL alias'))
        ->setTranslatable(TRUE)
        ->setDisplayOptions('form', [
          'type' => 'path',
          'weight' => 30,
        ])
        ->setDisplayConfigurable('form', TRUE)
        ->setComputed(TRUE);
    }

    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  protected function urlRouteParameters($rel) {
    $uri_route_parameters = parent::urlRouteParameters($rel);
    if (in_array($rel, ['revision-revert-form', 'revision-delete-form'], TRUE)) {
      $uri_route_parameters['group_revision'] = $this->getRevisionId();
    }
    return $uri_route_parameters;
  }

  /**
   * {@inheritdoc}
   */
  public function preSave(EntityStorageInterface $storage) {
    parent::preSave($storage);

    // Core needs to make sure this happens for all entities as this piece of
    // code is currently copy-pasted between Node, Media, Block, etc.
    // @todo Keep an eye on this from time to time and see if we can remove it.
    //   See: https://www.drupal.org/project/drupal/issues/2869056.
    if (!$this->getRevisionUser()) {
      $this->setRevisionUserId($this->getOwnerId());
    }
  }

  /**
   * {@inheritdoc}
   */
  public function preSaveRevision(EntityStorageInterface $storage, \stdClass $record) {
    parent::preSaveRevision($storage, $record);

    // Core needs to make sure this happens for all entities as this piece of
    // code is currently copy-pasted between Node, Media, Block, etc.
    // @todo Keep an eye on this from time to time and see if we can remove it.
    //   See: https://www.drupal.org/project/drupal/issues/2869056.
    if (!$this->isNewRevision() && isset($this->original) && empty($record->revision_log_message)) {
      assert($this->original instanceof GroupInterface);

      // If we are updating an existing group without adding a new revision, we
      // need to make sure $entity->revision_log is reset whenever it is empty.
      // Therefore, this code allows us to avoid clobbering an existing log
      // entry with an empty one.
      $record->revision_log_message = $this->original->getRevisionLogMessage();
    }

    if ($this->isNewRevision() && empty($record->revision_created)) {
      $record->revision_created = \Drupal::time()->getRequestTime();
    }
  }

  /**
   * {@inheritdoc}
   */
  public function postSave(EntityStorageInterface $storage, $update = TRUE) {
    parent::postSave($storage, $update);

    // If a new group is created and the group type is configured to grant group
    // creators a membership by default, add the creator as a member unless it
    // is being created using the wizard.
    // @todo Deprecate in 8.x-2.x in favor of a form-only approach. API-created
    //   groups should not get this functionality because it may create
    //   incomplete group memberships.
    $group_type = $this->getGroupType();
    if ($update === FALSE && $group_type->creatorGetsMembership() && !$group_type->creatorMustCompleteMembership()) {
      $values = ['group_roles' => $group_type->getCreatorRoleIds()];
      $this->addMember($this->getOwner(), $values);
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function preDelete(EntityStorageInterface $storage, array $entities) {
    // Remove all relationships from these groups as well.
    foreach ($entities as $group) {
      assert($group instanceof GroupInterface);
      foreach ($group->getRelationships() as $relationship) {
        $relationship->delete();
      }
    }
  }

}
