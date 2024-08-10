<div class="section-header">
    <h1><?= $titlePage ?></h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="<?= LINK ?>">หน้าหลัก</a></div>
        <div class="breadcrumb-item"><?= $titlePage ?></div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="<?= $action_link ?>save/1" method="post" enctype="multipart/form-data" id="myForm" class="needs-validation" novalidate>
            <div class="card">
                <div class="card-header">
                    <h4><?= $titlePage ?></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php if(!empty($post) && !empty($post['message'])) : ?>
                        <div class="col-12 mb-2">
                            <div class="alert alert-success">
                                <?= $post['message'] ?>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="username" class="form-label">ชื่อผู้ใช้ <span class="text-danger">*</span></label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="ชื่อผู้ใช้" value="<?= $results['username'] ?>" readonly>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="password" class="form-label">รหัสผ่าน </label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="รหัสผ่าน">
                            </div>
                        </div>

                        <div class="col-12">
                            <h6>ข้อมูลบัญชี</h6>
                            <hr>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="fname" class="form-label">ชื่อ <span class="text-danger">*</span></label>
                                <input type="text" name="fname" id="fname" value="<?= $results['fname'] ?>" class="form-control" placeholder="ชื่อ" required>
                                <div class="invalid-feedback">
                                    กรุณาระชื่อ
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="lname" class="form-label">นามสกุล <span class="text-danger">*</span></label>
                                <input type="text" name="lname" id="lname" value="<?= $results['lname'] ?>" class="form-control" placeholder="นามสกุล" required>
                                <div class="invalid-feedback">
                                    กรุณาระบุนามสกุล
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="email" class="form-label">อีเมล <span class="text-danger">*</span></label>
                                <input type="text" name="email" id="email" value="<?= $results['email'] ?>" class="form-control" placeholder="อีเมล" required>
                                <div class="invalid-feedback">
                                    กรุณาระบุอีเมล
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success" data-toggle="tooltip" title="บันทึก">
                            <i class="fas fa-save"></i>&nbsp;&nbsp;บันทึก
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>