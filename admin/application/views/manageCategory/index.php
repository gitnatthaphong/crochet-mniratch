<style>
    tbody tr td {
        vertical-align: middle !important;
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
        <div class="card">
            <div class="card-header">
                <h4>รายการหมวดหมู่</h4>
            </div>
            <div class="card-body">
                <div class="text-right mb-3">
                    <a href="<?= $action_link ?>form" class="btn btn-success" title="เพิ่มข้อมูล" data-toggle="tooltip">
                        <i class="fas fa-plus"></i> เพิ่มข้อมูล
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th class="text-center">ลำดับ</th>
                                <th>ชื่อหมวดหมู่</th>
                                <th class="text-center">สถานะ</th>
                                <th class="text-center">วันที่สร้าง</th>
                                <th class="text-center"><i class="fas fa-cogs"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($results)) : ?>
                                <?php foreach ($results as $key => $value) : ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $key + 1 ?>
                                        </td>
                                        <td>
                                            <?= $value['topic_name'] ?>
                                        </td>
                                        <td class="text-center">
                                            <div class="badge badge-<?= $value['status'] == 1 ? 'success' : 'danger' ?>" data-toggle="tooltip" title="<?= $value['status'] == 1 ? 'เผยแพร่' : 'ไม่เผยแพร่' ?>">
                                                <?= $value['status'] == 1 ? 'เผยแพร่' : 'ไม่เผยแพร่' ?>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <?= dateTimeToDateThai($value['create_date']) ?>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-warning" href="<?= $action_link ?>form/<?= $value['topic_id'] ?>" data-toggle="tooltip" title="แก้ไขข้อมูล">
                                                <i class="fas fa-edit"></i> แก้ไขข้อมูล
                                            </a>

                                            <a onclick="return confirm('คุณต้องการลบรายการนี้ใช่หรือไม่ ?')" class="btn btn-danger" data-toggle="tooltip" href="<?= $action_link ?>delete/<?= $value['topic_id'] ?>" title="ลบข้อมูล">
                                                <i class="fas fa-trash-alt"></i> ลบข้อมูล
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6" class="text-center h-60">- ไม่พบข้อมูล -</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#dataTable").dataTable({
        "language": {
            "info": "ทั้งหมด _TOTAL_ รายการ",
            "infoEmpty": "ทั้งหมด 0 รายการ",
            "emptyTable": "- ไม่พบข้อมูล -",
            "infoFiltered": "",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "แสดง _MENU_ รายการ",
            "loadingRecords": "กำลังโหลด...",
            "processing": "",
            "search": "ค้นหา:",
            "zeroRecords": "- ไม่พบข้อมูล -",
            "paginate": {
                "first": "หน้าแรก",
                "last": "หน้าสุดท้าย",
                "next": "ถัดไป",
                "previous": "ก่อนหน้า"
            },
        },
        // "ajax": {
        //      url: '/api/myData',
        //     dataSrc: 'staff'
        // },
        // "columns": [
        //     { data: 'name' },
        //     { data: 'hr.position' },
        //     { data: 'hr.salary' },
        //     { data: 'hr.state_date' },
        //     { data: 'contact.office' },
        //     { data: 'contact.extn' }
        // ]
    });
</script>