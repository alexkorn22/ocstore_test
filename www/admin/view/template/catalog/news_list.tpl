<?
/**
 * @var Template $this
 */


?>
<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <a href="<?php echo $setting; ?>" data-toggle="tooltip" title="Настройки" class="btn btn-primary"><i class="fa fa-cog"></i>&nbsp;Настройки</a>
                <a href="<?php echo $add; ?>" data-toggle="tooltip" title="Добавить" class="btn btn-success"><i class="fa fa-plus"></i></a>
                <button type="button" data-toggle="tooltip" title="Удалить" class="btn btn-danger" onclick="confirm('<?php echo $text_confirm; ?>') ? $('#form-news').submit() : false;"><i class="fa fa-trash-o"></i></button>
            </div>
            <h1><?php echo $heading_title; ?></h1>
            <ul class="breadcrumb">
                <?php foreach ($breadcrumbs as $breadcrumb) { ?>
                    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <?
        echo 'Content0';

        ?>
    </div>
</div>
<?php echo $footer; ?>

