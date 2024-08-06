<style>
    .previewImage {
        width: 100%;
        max-height: 300px;
        overflow: scroll;
        margin-top: 10px;
        display: none;
    }

    .previewImage img {
        max-width: 400px;
        max-height: 400px;
        object-fit: contain;
    }
</style>

<div class="container-fluid py-1 pb-4 px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="<?= LINK ?>">หน้าหลัก</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?= $titlePage ?></li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0"><?= $titlePage ?></h6>
    </nav>
</div>

<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card customCard">
            <form action="<?= $action_link ?>save" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                <div class="row gy-2">
                    <div class="col-12">
                        <h5>แบนเนอร์</h5>
                    </div>

                    <div class="col-12">
                        <label for="banner_title" class="form-label">หัวเรื่อง <span class="text-danger">*</span></label>
                        <input type="text" name="banner_title" value="<?= !empty($results) ? $results['banner_title'] : '' ?>" class="form-control" id="banner_title" placeholder="หัวเรื่อง" required>
                        <div class="invalid-feedback">
                            กรุณาระบุหัวเรื่อง
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="banner_detail" class="form-label">รายละเอียด <span class="text-danger">*</span></label>
                        <textarea name="banner_detail" id="banner_detail" class="form-control tiny" placeholder="รายละเอียด" required>
                            <?= !empty($results) ? $results['banner_detail'] : '' ?>
                        </textarea>
                        <div class="invalid-feedback">
                            กรุณาระบุรายละเอียด
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="banner_image" class="form-label">รูปภาพ <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="banner_image" name="banner_image" placeholder="รูปภาพ" accept="image/*" <?= !empty($results) && !empty($results['image_path']) ? '' : 'required' ?>>

                        <div class="previewImage text-center">
                            <img class="previewBash" id="previewBash" src="<?= !empty($results) && !empty($results['image_path']) ? $results['image_path'] : '' ?>">
                        </div>

                        <div class="invalid-feedback">
                            กรุณาอัพโหลดรูปภาพ
                        </div>
                    </div>

                    <div class="col-12">
                        <hr>
                    </div>

                    <div class="col-12">
                        <h5>ยอดรวมสั่งซื้อ</h5>
                    </div>


                    <div class="col-12">
                        <label for="total_shop" class="form-label">ยอดสั่งซื้อ <span class="text-danger">(กรณีไม่ระบุ ค่าเริ่มต้นคือ 2000)</span></label>
                        <input type="text" name="total_shop" value="<?= !empty($results) ? $results['total_shop'] : '' ?>" class="form-control" id="total_shop" placeholder="ยอดสั่งซื้อ">
                    </div>

                    <div class="col-12">
                        <label for="bg_count" class="form-label">รูปภาพพื้นหลัง <span class="text-danger">*</span></label>
                        <input type="file" class="form-control" id="bg_count" name="bg_count" placeholder="รูปภาพพื้นหลัง" accept="image/*" <?= !empty($results) && !empty($results['image_path']) ? '' : 'required' ?>>

                        <div class="previewImage text-center">
                            <img class="previewBash" id="previewBash" src="<?= !empty($results) && !empty($results['image_path']) ? $results['image_path'] : '' ?>">
                        </div>

                        <div class="invalid-feedback">
                            กรุณาอัพโหลดรูปภาพพื้นหลัง
                        </div>
                    </div>

                    <div class="col-12">
                        <hr>
                    </div>

                    <div class="col-12">
                        <h5>ติดต่อ</h5>
                    </div>

                    <div class="col-12">
                        <label for="contact_title" class="form-label">หัวเรื่อง <span class="text-danger">*</span></label>
                        <input type="text" name="contact_title" value="<?= !empty($results) ? $results['contact_title'] : '' ?>" class="form-control" id="contact_title" placeholder="หัวเรื่อง" required>
                        <div class="invalid-feedback">
                            กรุณาระบุหัวเรื่อง
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="contact_detail" class="form-label">รายละเอียด <span class="text-danger">*</span></label>
                        <textarea name="contact_detail" id="contact_detail" class="form-control tiny" placeholder="รายละเอียด" required>
                            <?= !empty($results) ? $results['contact_detail'] : '' ?>
                        </textarea>
                        <div class="invalid-feedback">
                            กรุณาระบุรายละเอียด
                        </div>
                    </div>

                    <div class="col-12">
                        <hr>
                    </div>

                    <div class="col-12">
                        <h5>ลิงก์ Social</h5>
                    </div>
                    <div class="col-12">
                        <label for="social_facebook" class="form-label">ลิงก์ Facebook <span class="text-danger">*</span></label>
                        <input type="text" name="social_facebook" value="<?= !empty($results) ? $results['social_facebook'] : '' ?>" class="form-control" id="social_facebook" placeholder="ลิงก์ Facebook" required>
                        <div class="invalid-feedback">
                            กรุณาระบุลิงก์ Facebook
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="social_instagram" class="form-label">ลิงก์ Instagram <span class="text-danger">*</span></label>
                        <input type="text" name="social_instagram" value="<?= !empty($results) ? $results['social_instagram'] : '' ?>" class="form-control" id="social_instagram" placeholder="ลิงก์ Instagram" required>
                        <div class="invalid-feedback">
                            กรุณาระบุลิงก์ Instagram
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="text-center mt-3">
                            <a class="btn btn-secondary" href="<?= $action_link ?>" title="ยกเลิก">ยกเลิก</a>
                            <button type="submit" class="btn btn-success" title="บันทึก">บันทึก</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    tinymce.init({
        selector: 'textarea.tiny',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
        height: 600,
        toolbar: "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",
        menubar: 'file edit view insert format tools table help',
    });


    $(document).ready(function() {

        <?php if(!empty($results) && !empty($results['image_path'])) : ?>
            $('.previewImage').fadeIn();
        <?php endif; ?>

        $('#banner_image').on('change', function(event) {
            $('.previewImage').fadeIn();
            $('#previewBash').attr('src', URL.createObjectURL(event.target.files[0]));
        })


        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
        

        
    })
</script>