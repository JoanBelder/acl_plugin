<?php
/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2: */
?>
<?php if (!empty($node)) { ?>
  <?php if ($node['AclAro']['lft']) { ?>
  <option value="<?php print $node['AclAro']['parent_id'] ?>">..</option>
  <?php } ?>
  <option id="aro_editor_defaultParentId" value="<?php print $node['AclAro']['id'] ?>">.</option>
<?php } ?>
<?php foreach ($children as $c) { ?>
<option value="<?php print $c['AclAro']['id'] ?>">
  <?php print $c['AclAro']['alias'] ?>
  <?php if ($c['AclAro']['children']) print " ({$c['AclAro']['children']})" ?>
</option>
<?php } ?>
