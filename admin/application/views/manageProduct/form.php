<style>
    .previewImage {
        width: 100%;
        max-height: 300px;
        overflow: scroll;
        margin-top: 10px;
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5  text-white" href="<?= LINK ?>">หน้าหลัก</a></li>
            <li class="breadcrumb-item text-sm text-white">
                <a class="breadcrumb-item text-sm text-white opacity-5 " href="<?= $action_link ?>"><?= $titlePage ?></a>
            </li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page"><?= $titlePageAction ?></li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0"><?= $titlePage ?></h6>
    </nav>
</div>

<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card customCard">
            <form action="<?= $action_link ?>submit" method="post" enctype="multipart/form-data">
                <div class="row gy-2">
                    <div class="col-12">
                        <label for="product_name" class="form-label">ชื่อสินค้า</label>
                        <input type="text" name="product_name" class="form-control" id="product_name" placeholder="ชื่อสินค้า">
                    </div>

                    <div class="col-12">
                        <label for="product_image" class="form-label">แท็ก</label>
                        <input type="text" class="form-control form-tags" id="example" data-ub-tag-enter placeholder="พิมพ์แล้วกด Enter">
                    </div>

                    <div class="col-12">
                        <label for="product_image" class="form-label">รูปภาพสินค้า</label>
                        <input type="file" class="form-control" id="product_image" placeholder="รูปภาพสินค้า" accept="image/*">
                        <div class="text-center">
                            <div class="previewImage">
                                <img class="previewBash" id="previewBash">
                            </div>
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
    UseBootstrapTag(document.getElementById('example'))

    $(document).ready(function() {

        $('#product_image').on('change', function(event) {
            $('#previewBash').attr('src', URL.createObjectURL(event.target.files[0]));
        })
        
    })
</script>