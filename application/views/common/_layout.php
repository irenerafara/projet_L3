
<!DOCTYPE html>
<html lang="en">
<?php $this -> load -> view('common/_head') ?>
<!-- Beginin of the page -->
<body id="page-top">
    <input type = "hidden" id = "base-url" value = "<?php echo base_url() ?>" />
    <?php if($load_menus) $this -> load -> view('common/_topbar') ?>
    <div id="wrapper" style="background-color: burlywood;">

        <!-- Sidebar -->
        <?php if($load_menus) $this -> load -> view('common/_menus') ?>
        
        <div id="content-wrapper" style="padding-bottom: 1000px;">

            <?php $this -> load -> view($page) ?>
        </div>
        <!-- /#wrapper -->
    </div>
    <?php $this -> load -> view('common/_foot') ?>
</body>
</html>
