<style>
    .previewImage {
        max-width: 200px;
        display: none;
    }

    .pt-5px {
        padding-top: 5px;
    }

    .modal-backdrop.fade.show {
        display: none;
    }
</style>

<div class="section-header">
    <h1><?= $titlePage ?></h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="<?= LINK ?>">หน้าหลัก</a></div>
        <div class="breadcrumb-item active"><?= $titlePage ?></div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="<?= $action_link ?>save/" method="post" enctype="multipart/form-data" id="myForm" class="needs-validation" novalidate>
            <div class="card">
                <div class="card-header">
                    <h4><?= $titlePage ?></h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2">
                            <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="banner-tab" data-toggle="tab" href="#banner-pane" role="tab">แบนเนอร์</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="total-tab" data-toggle="tab" href="#total-pane" role="tab">ยอดรวมสั่งซื้อ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact-pane" role="tab">ติดต่อ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="social-tab" data-toggle="tab" href="#social-pane" role="tab">Social</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-10">
                            <div class="tab-content no-padding" id="myTab2Content">
                                <div class="tab-pane fade show active" id="banner-pane" role="tabpanel" aria-labelledby="banner-tab">
                                    <?php $this->load->view('manageWebsite/components/banner'); ?>
                                </div>
                                <div class="tab-pane fade" id="total-pane" role="tabpanel" aria-labelledby="total-tab">
                                    <?php $this->load->view('manageWebsite/components/total'); ?>
                                </div>
                                <div class="tab-pane fade" id="contact-pane" role="tabpanel" aria-labelledby="contact-tab">
                                    <?php $this->load->view('manageWebsite/components/contact'); ?>
                                </div>
                                <div class="tab-pane fade" id="social-pane" role="tabpanel" aria-labelledby="social-tab">
                                    <?php $this->load->view('manageWebsite/components/social'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="text-center">
                        <a class="btn btn-warning" href="<?= $action_link ?>/reset" onclick="return confirm('คุณต้องการคืนค่าเริ่มต้นใช่หรือไม่ ?')" data-toggle="tooltip" title="คืนค่าเริ่มต้น">
                            <i class="fas fa-sync-alt"></i>&nbsp;&nbsp;คืนค่าเริ่มต้น
                        </a>
                        <button type="button" onclick="validateShowModal()" class="btn btn-success" data-toggle="tooltip" title="บันทึก">
                            <i class="fas fa-save"></i>&nbsp;&nbsp;บันทึก
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<div class="modal fade customMyModal" tabindex="1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-danger">กรุณากรอกข้อมูลให้ครบถ้วน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>

<script>
    const validateShowModal = () => {
        let error = [];
        <?php if (!empty($results)) : ?>
            <?php foreach ($results as $key => $value) : ?>

                if ($("input[name='<?= $key ?>'").val() == '') {
                    error.push('- <?= $errorField[$key] ?>');
                }
            <?php endforeach; ?>
        <?php endif; ?>

        if (error.length > 0) {
            $('#exampleModal').modal('show');
            $('.customMyModal .modal-body').html(`${error.join('<br>')}`);
            // $("#modal-1").fireModal({
            //     title: '<span class="text-danger">กรุณากรอกฟอร์มให้ครบถ้วน</span>',
            //     body: `${error.join('<br>')}`
            // });
            return false;
        }

        $('#myForm').submit();
    }
</script>