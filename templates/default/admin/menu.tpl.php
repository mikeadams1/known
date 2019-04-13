<ul class="nav">
  <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/"><?php echo \Idno\Core\Idno::site()->language()->_('Site configuration'); ?></a></li>
  <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/plugins/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/plugins/"><?php echo \Idno\Core\Idno::site()->language()->_('Plugins'); ?></a></li>
  <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/themes/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/themes/"><?php echo \Idno\Core\Idno::site()->language()->_('Themes'); ?></a></li>
            <?php echo $this->draw('admin/menu/items')?>
  <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/homepage/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/homepage/" ><?php echo \Idno\Core\Idno::site()->language()->_('Homepage'); ?></a></li>
  <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/email/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/email/" ><?php echo \Idno\Core\Idno::site()->language()->_('Email'); ?></a></li>
  <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/users/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/users/" ><?php echo \Idno\Core\Idno::site()->language()->_('Users'); ?></a></li>
  <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/export/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/export/" ><?php echo \Idno\Core\Idno::site()->language()->_('Export'); ?></a></li>
  <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/import/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/import/" ><?php echo \Idno\Core\Idno::site()->language()->_('Import'); ?></a></li>
  <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/diagnostics/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/diagnostics/"><?php echo \Idno\Core\Idno::site()->language()->_('Diagnostics'); ?></a></li>
    <?php if (!empty(\Idno\Core\Idno::site()->config()->capture_logs) && \Idno\Core\Idno::site()->config()->capture_logs) { ?>
    <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/logs/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/logs/"><?php echo \Idno\Core\Idno::site()->language()->_('Captured Logs'); ?></a></li>
    <?php } ?>
  <li <?php if (\Idno\Core\Idno::site()->currentPage()->doesPathMatch('/admin/about/')) echo 'class="active"'; ?> role="presentation"><a href="<?php echo \Idno\Core\Idno::site()->config()->getDisplayURL()?>admin/about/"><?php echo \Idno\Core\Idno::site()->language()->_('About'); ?></a></li>
</ul>
