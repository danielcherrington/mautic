<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$size            = (empty($size)) ? '' : ' modal-'.$size;
$class           = (!empty($class)) ? " $class" : "";
$body            = (empty($body)) ? "" : $body;
$hidePlaceholder = (empty($body)) ? false : true;
$header          = (empty($header)) ? "" : $header;
?>

<div class="modal fade" id="<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $id; ?>-label" aria-hidden="true">
    <div class="modal-dialog<?php echo $size; ?>">
        <div class="modal-content<?php echo $class; ?>">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="<?php echo $id; ?>-label">
                    <?php echo $header; ?>
                </h4>
            </div>
            <div class="modal-body">
                <div class="loading-placeholder<?php echo $hidePlaceholder; ?>">
                    <?php echo $view['translator']->trans('mautic.core.loading'); ?>
                </div>
                <div class="modal-body-content">
                    <?php echo $body; ?>
                </div>
            </div>
        </div>
    </div>
</div>