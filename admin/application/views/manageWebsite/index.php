<style>
    .previewImage {
        max-width: 200px;
        display: none;
    }

    .pt-5px {
        padding-top: 5px;
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
        <form action="<?= $action_link ?>save/" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card">
                <div class="card-header">
                    <h4><?= $titlePage ?></h4>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
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
                        <div class="col-12 col-sm-12 col-md-8">
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
                        <!-- <a class="btn btn-warning" href="<?= $action_link ?>" data-toggle="tooltip" title="ยกเลิก">
                            <i class="fas fa-times"></i>&nbsp;&nbsp;ยกเลิก
                        </a> -->
                        <button type="submit" class="btn btn-success" data-toggle="tooltip" title="บันทึก">
                            <i class="fas fa-save"></i>&nbsp;&nbsp;บันทึก
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".input-tags").tagsinput({
            confirmKeys: [13]
        });

        $('.bootstrap-tagsinput input').on("keydown", function(e) {
            if (event.keyCode == 13) {
                event.preventDefault();
                if (e.target.value > '') {
                    $(".input-tags").tagsinput('add', e.target.value);
                    $(this).val('');
                }
            }
        })

        <?php if (!empty($results) && !empty($results['image_path'])) : ?>
            $('.previewImage').fadeIn();
        <?php endif; ?>

        $('#customFile').on('change', function(event) {
            $('label[for="customFile"]').text(event.target.files[0].name);
            $('.previewImage').fadeIn();
            $('.previewBash').attr('src', URL.createObjectURL(event.target.files[0]));
        })

    });
</script>