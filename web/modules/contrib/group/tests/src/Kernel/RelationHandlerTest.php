<?php

namespace Drupal\Tests\group\Kernel;

use Drupal\Tests\group\Traits\NodeTypeCreationTrait;
use Drupal\group\Plugin\Group\Relation\GroupRelationTypeManagerInterface;

/**
 * Tests that relation handlers work as expected.
 *
 * The services being tested come from group_test_plugin and
 * group_test_plugin_alter. Check their services files to get an idea.
 *
 * @group group
 */
class RelationHandlerTest extends GroupKernelTestBase {

  use NodeTypeCreationTrait;

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['group_test_plugin', 'group_test_plugin_alter', 'node'];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();
    $this->installConfig(['user', 'group_test_plugin']);
    $this->installSchema('node', ['node_access']);
    $this->installEntitySchema('entity_test_with_owner');
    $this->installEntitySchema('node');
    $this->createNodeType(['type' => 'page']);
    $this->createNodeType(['type' => 'article']);
  }

  /**
   * Tests that decorators can target all plugins or one in specific.
   */
  public function testDecoratorChain() {
    $relation_manager = $this->container->get('group_relation_type.manager');
    assert($relation_manager instanceof GroupRelationTypeManagerInterface);

    $message = "All plugins have foobar appended, proving decorating defaults works and respects priority";
    $expected = 'administer user_as_contentfoobar';
    $this->assertSame($expected, $relation_manager->getPermissionProvider('user_as_content')->getAdminPermission(), $message);

    $message = "Node plugin also has baz appended, proving decoration_priority works separately for the default and specific service";
    $expected = 'administer node_as_content:pagefoobarbaz';
    $this->assertSame($expected, $relation_manager->getPermissionProvider('node_as_content:page')->getAdminPermission(), $message);

    $message = "Test entity plugin also has bazfoo appended, proving decoration_priority is respected within specific alters";
    $expected = 'administer entity_test_as_contentfoobarbazfoo';
    $this->assertSame($expected, $relation_manager->getPermissionProvider('entity_test_as_content')->getAdminPermission(), $message);
  }

  /**
   * Tests that decorators are automatically set as non-shared services.
   */
  public function testDecoratorNotShared() {
    $this->assertFalse($this->container->getDefinition('group.relation_handler_decorator.permission_provider.bar')->isShared());
    $this->assertFalse($this->container->getDefinition('group.relation_handler_decorator.permission_provider.baz.node_as_content')->isShared());
  }

}
