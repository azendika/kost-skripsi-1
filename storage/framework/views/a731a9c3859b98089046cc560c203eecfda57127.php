

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('komponen.pesan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <h3 class="text-start" style="margin:20px;font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serir:sty">Data Lokasi Kos</h3>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="d-flex justify-content-between align-items-center pb-3">
            <!-- SEARCH FORM -->
            <form class="d-flex" action="<?php echo e(route('lokasi_kos.index')); ?>" method="get" id="search-form">
                <div class="input-group">
                    <label class="input-group-text search-input" for="search-input">Search</label>
                    <input class="form-control" type="search" name="katakunci" placeholder="Masukkan kata kunci"
                        aria-label="Search" id="search-input">
                    <button class="btn btn-secondary" type="submit">Cari</button>
                </div>
            </form>
            <script>
                $(document).ready(function() {
                    // Original data (you can replace this with your actual data)
                    var originalData = [
                        { name: "Item 1", value: "value1" },
                        { name: "Item 2", value: "value2" },
                        // ... more data ...
                    ];
                
                    // Populate the autocomplete suggestions
                    function populateAutocomplete(data) {
                        $("#search-input").autocomplete({
                            source: data.map(item => item.name),
                            select: function(event, ui) {
                                // Handle selection
                                // You can find the selected item value using ui.item.value
                            }
                        });
                    }
                
                    // Initialize autocomplete with original data
                    populateAutocomplete(originalData);
                
                    // Clear search input and revert to original data
                    $("#clear-button").click(function() {
                        $("#search-input").val("");
                        populateAutocomplete(originalData);
                    });
                });
            </script>



            <button class="btn btn-secondary" data-toggle="modal" data-target="#tambahDataModal">
                <i class="fas fa-plus"></i> Tambah Data
            </button>
            <?php echo $__env->make('lokasi_kos.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Include the modal partial -->



        </div>
    </div>


    <!-- LOKASI_KOS LIST TABLE -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kos</th>
                <th>Jumlah Kamar</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = $data->firstItem();
            ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($item->nama_kos); ?></td>
                <td><?php echo e($item->jumlah_kamar); ?></td>
                <td><?php echo e($item->alamat_kos); ?></td>
                <td>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline"
                        action="<?php echo e(route('lokasi_kos.destroy', $item->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="<?php echo e(route('lokasi_kos.detail', $item->id)); ?>" class="btn btn-success btn-sm">Detail</a>
                </td>
            </tr>
            <?php
            $i++;
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($data->withQueryString()->links()); ?>

</div>
</div>
</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kost-skripsi\resources\views/lokasi_kos/index.blade.php ENDPATH**/ ?>