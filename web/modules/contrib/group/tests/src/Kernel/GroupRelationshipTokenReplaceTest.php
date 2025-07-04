<?php

namespace Drupal\Tests\group\Kernel;

use Drupal\Component\Utility\Html;
use Drupal\Core\Render\BubbleableMetadata;

/**
 * Generates text using placeholders to check relationship token replacement.
 *
 * @group group
 */
class GroupRelationshipTokenReplaceTest extends GroupTokenReplaceKernelTestBase {

  /**
   * Tests the tokens replacement for relationship.
   */
  public function testGroupRelationshipTokenReplacement() {
    $url_options = [
      'absolute' => TRUE,
      'language' => $this->interfaceLanguage,
    ];

    // Create a group and retrieve the relationship for the owner's membership.
    $group = $this->createGroup(['type' => $this->createGroupType()->id()]);
    $account = $group->getOwner();
    $group_relationship = $group->getMember($account)->getGroupRelationship();

    // Generate and test tokens.
    $tests = [];
    $tests['[group_content:id]'] = $group_relationship->id();
    $tests['[group_content:langcode]'] = $group_relationship->language()->getId();
    $tests['[group_content:url]'] = $group_relationship->toUrl('canonical', $url_options)->toString();
    $tests['[group_content:edit-url]'] = $group_relationship->toUrl('edit-form', $url_options)->toString();
    $tests['[group_content:pretty-path-key]'] = $group_relationship->getPlugin()->getRelationType()->getPrettyPathKey();
    $tests['[group_content:group]'] = Html::escape($group->label());
    $tests['[group_content:group:id]'] = $group->id();
    $tests['[group_content:created:since]'] = \Drupal::service('date.formatter')->formatTimeDiffSince($group_relationship->getCreatedTime(), ['langcode' => $this->interfaceLanguage->getId()]);
    $tests['[group_content:changed:since]'] = \Drupal::service('date.formatter')->formatTimeDiffSince($group_relationship->getChangedTime(), ['langcode' => $this->interfaceLanguage->getId()]);

    $base_bubbleable_metadata = (new BubbleableMetadata())->addCacheableDependency($group_relationship);

    $metadata_tests = [];
    $metadata_tests['[group_content:id]'] = $base_bubbleable_metadata;
    $metadata_tests['[group_content:langcode]'] = $base_bubbleable_metadata;
    $metadata_tests['[group_content:url]'] = $base_bubbleable_metadata;
    $metadata_tests['[group_content:edit-url]'] = $base_bubbleable_metadata;
    $metadata_tests['[group_content:pretty-path-key]'] = $base_bubbleable_metadata;
    $bubbleable_metadata = clone $base_bubbleable_metadata;
    $metadata_tests['[group_content:group]'] = $bubbleable_metadata->addCacheTags($group->getCacheTags());
    $metadata_tests['[group_content:group:id]'] = $bubbleable_metadata;
    $bubbleable_metadata = clone $base_bubbleable_metadata;
    $metadata_tests['[group_content:created:since]'] = $bubbleable_metadata->setCacheMaxAge(0);
    $metadata_tests['[group_content:changed:since]'] = $bubbleable_metadata;

    // Test to make sure that we generated something for each token.
    $this->assertFalse(in_array(0, array_map('strlen', $tests)), 'No empty tokens generated.');

    foreach ($tests as $token => $expected) {
      $bubbleable_metadata = new BubbleableMetadata();
      $output = $this->tokenService->replace($token, ['group_content' => $group_relationship], ['langcode' => $this->interfaceLanguage->getId()], $bubbleable_metadata);
      $this->assertEquals($output, $expected, sprintf('Group relationship token %s replaced.', $token));
      $this->assertEquals($bubbleable_metadata, $metadata_tests[$token]);
    }
  }

}
