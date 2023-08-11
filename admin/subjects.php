<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Subject</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Admin</a></li>
                        <li class="breadcrumb-item active">Subjects</li>
                    </ol>
                </div><!-- /.col -->
                <?php

                if (isset($_SESSION['success_msg'])) { ?>
                    <div class="col-12">
                        <small class="text-success" style="font-size:16px"><?= $_SESSION['success_msg'] ?></small>
                    </div>
                <?php
                    unset($_SESSION['success_msg']);
                } ?>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <Section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class='col-lg-4'>
                    <!-- Info boxes -->
                    <div class="card">
                        <div class="card-header py-2">
                            <h3 class="card-title">
                                Add New Subject
                            </h3>
                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">

                                <div class="form-group">
                                    <label for="class">Select Class</label>
                                    <select require name="class" id="class" class="form-control">
                                        <option value="">-Select Class-</option>
                                        <?php
                                        $args = array(
                                            'type' => 'class',
                                            'status' => 'publish',
                                        );
                                        $classes = get_posts($args);
                                        foreach ($classes as $key => $class) { ?>
                                            <option value="<?php echo $class->id ?>"><?php echo $class->title ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group" id="section-container" style="display:none;">
                                    <label for="section">Select Section</label>
                                    <select require name="section" id="section" class="form-control">
                                        <option value="">Select Section</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject Name</label>
                                    <input require type="text" name="subject" placeholder="Subject Name" required class="form-control">
                                </div>
                                <button name="submit" class="btn btn-success">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header py-2">
                            <h3 class="card-title">
                                Subjets
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive bg-white">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Name</th>
                                            <th>Publish date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        $args = array(
                                            'type' => 'subject',
                                            'status' => 'publish',
                                        );
                                        $subjects = get_posts($args);
                                        foreach ($subjects as $key => $subject) { ?>
                                            <tr>
                                                <td><?= $count++ ?></td>
                                                <td><?= $subject->title ?></td>
                                                <td><?= $subject->publish_date ?></td>
                                                <td></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </Section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('footer.php') ?>