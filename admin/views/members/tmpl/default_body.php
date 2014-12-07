<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->members as $i => $member): ?>
    <tr class="row<?php echo $i % 2; ?>">
        <td>
            <?php echo JHtml::_('grid.id', $i, $member->id); ?>
        </td>
        <td>
            <?php echo $member->name; ?>
        </td>
        <td>
            <?php echo $member->id; ?>
        </td>
    </tr>
<?php endforeach; ?>