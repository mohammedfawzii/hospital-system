<div class="card card-fluid">
    <!-- .card-header -->
    <div class="card-header">
        <!-- .nav-tabs -->
        <div class="nav nav-tabs card-header-tabs">
            <h1 class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab1">Cleaning-official</a>
            </h1>

        </div><!-- /.nav-tabs -->
    </div><!-- /.card-header -->
    <!-- .card-body -->
    <div class="card-body">
        <!-- .form-group -->
        <div class="form-group">
            <!-- .input-group -->
            <div class="input-group input-group-alt">
                <!-- .input-group -->
                <div class="input-group has-clearable">
                    <button id="clear-search" type="button" class="close" aria-label="Close"><span
                            aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                    </div><input id="table-search" type="text" class="form-control"
                        placeholder="Search products">
                </div><!-- /.input-group -->
                <!-- .input-group-append -->
                <div class="input-group-append">
                    <button class="btn btn-secondary" data-toggle="modal" data-target="#modalFilterColumns">Filter
                        Columns</button>
                </div><!-- /.input-group-append -->
            </div><!-- /.input-group -->
        </div><!-- /.form-group -->
        <!-- #modalFilterColumns -->
        <div class="modal fade" id="modalFilterColumns" tabindex="-1" role="dialog"
            aria-labelledby="modalFilterColumnsLabel" aria-hidden="true">
            <!-- .modal-dialog -->
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <!-- .modal-content -->
                <div class="modal-content">
                    <!-- .modal-header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalFilterColumnsLabel"> Filter Columns </h5>
                    </div><!-- /.modal-header -->
                    <!-- .modal-body -->
                    <div class="modal-body">
                        <!-- #filter-columns -->
                        <div id="filter-columns">
                            <!-- .form-row -->
                            <div class="form-group form-row filter-row">
                                <!-- form column -->
                                <div class="col">
                                    <select class="custom-select filter-control filter-column">
                                        <option value="1"> Name </option>
                                        <option value="2"> Position </option>
                                        <option value="3"> Department </option>
                                        <option value="4"> Phone </option>
                                        <option value="5"> Adriss </option>
                                    </select>
                                </div><!-- /form column -->
                                <!-- form column -->
                                <div class="col">
                                    <select class="custom-select filter-control filter-operator">
                                        <option value="contain"> Contain </option>
                                        <option value="notcontain"> Not Contain </option>
                                        <option value="equal"> Equal to </option>
                                        <option value="notequal"> Not equal to </option>
                                        <option value="beginwith"> Begin with </option>
                                        <option value="endwith"> End with </option>
                                        <option value="greaterthan"> Greater than </option>
                                        <option value="lessthan"> Less than </option>
                                    </select>
                                </div><!-- /form column -->
                                <!-- form column -->
                                <div class="col">
                                    <div class="input-group input-group-alt">
                                        <input type="text"
                                            class="form-control filter-control filter-value rounded mr-2">
                                        <div class="input-group-append">
                                            <button class="close remove-filter-row">×</button>
                                        </div>
                                    </div>
                                </div><!-- /form column -->
                            </div><!-- /.form-row -->
                            <!-- .form-row -->
                            <div class="form-group form-row filter-row">
                                <!-- form column -->
                                <div class="col">
                                    <select class="custom-select filter-control filter-column">
                                        <option value="1"> Name </option>
                                        <option value="2"> Position </option>
                                        <option value="3"> Department </option>
                                        <option value="4"> Phone </option>
                                        <option value="5"> Adriss </option>
                                    </select>
                                </div><!-- /form column -->
                                <!-- form column -->
                                <div class="col">
                                    <select class="custom-select filter-control filter-operator">
                                        <option value="contain"> Contain </option>
                                        <option value="notcontain"> Not Contain </option>
                                        <option value="equal"> Equal to </option>
                                        <option value="notequal"> Not equal to </option>
                                        <option value="beginwith"> Begin with </option>
                                        <option value="endwith"> End with </option>
                                        <option value="greaterthan"> Greater than </option>
                                        <option value="lessthan"> Less than </option>
                                    </select>
                                </div><!-- /form column -->
                                <!-- form column -->
                                <div class="col">
                                    <div class="input-group input-group-alt">
                                        <input type="text"
                                            class="form-control filter-control filter-value rounded mr-2">
                                        <div class="input-group-append">
                                            <button class="close remove-filter-row">×</button>
                                        </div>
                                    </div>
                                </div><!-- /form column -->
                            </div><!-- /.form-row -->
                        </div><!-- #filter-columns -->
                        <!-- .btn -->
                        <button id="add-filter-row" class="btn btn-reset my-2"><i class="fa fa-plus mr-1"></i> add
                            filter</button> <!-- /.btn -->
                    </div><!-- /.modal-body -->
                    <!-- .modal-footer -->
                    <div class="modal-footer justify-content-start">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Apply
                            filters</button> <button type="button" class="btn btn-light"
                            id="clear-filter">Cancel</button>
                    </div><!-- /.modal-footer -->
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /#modalFilterColumns -->
        <!-- .table -->
        <div id="myTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="text-muted">
                <div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">Showing 0 to 0
                    of 0 entries</div>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table dataTable no-footer" aria-describedby="myTable_info"
                    role="grid">
                    <!-- thead -->
                    <thead>
                        <tr role="row">
                            <th>#</th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="myTable"
                                rowspan="1" colspan="1"
                                aria-label=" Inventory : activate to sort column ascending"> Name </th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="myTable"
                                rowspan="1" colspan="1"
                                aria-label=" Inventory : activate to sort column ascending"> Department </th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="myTable"
                                rowspan="1" colspan="1"
                                aria-label=" Variants : activate to sort column ascending"> Position </th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="myTable"
                                rowspan="1" colspan="1"
                                aria-label=" Prices : activate to sort column ascending"> Adriss </th>
                            <th class="align-middle sorting" tabindex="0" aria-controls="myTable"
                                rowspan="1" colspan="1"
                                aria-label=" Sales : activate to sort column ascending"> Phone </th>
                            <th style="width:100px; min-width:100px;"
                                class="align-middle text-right sorting_disabled" rowspan="1" colspan="1"
                                aria-label=" &amp;nbsp; "> &nbsp; </th>
                        </tr>
                    </thead><!-- /thead -->
                    <!-- tbody -->
                    <tbody>
                        <!-- create empty row to passing html validator -->

                        <tr class="odd">
                            <tr>
                                <td class="align-middle w-5"><a href="#">1</a></td>
                                <td class="align-middle w-25"><a href="#">DR.Ahmed Nabeil</a></td>
                                <td class="align-middle"> teeth</td>
                                <td class="align-middle"> master of doctors</td>
                                <td class="align-middle w-10">  cairo</td>
                                <td class="align-middle w-10">  1234567890</td>
                            </tr>
                        </tr>
                    </tbody><!-- /tbody -->
                </table>
            </div>
            <div class="mt-4">
                <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate">
                    <ul class="pagination justify-content-center">
                        <li class="paginate_button page-item previous disabled" id="myTable_previous"><a
                                href="#" aria-controls="myTable" data-dt-idx="0" tabindex="0"
                                class="page-link"><i class="fa fa-lg fa-angle-left"></i></a></li>
                        <li class="paginate_button page-item next disabled" id="myTable_next"><a href="#"
                                aria-controls="myTable" data-dt-idx="1" tabindex="0" class="page-link"><i
                                    class="fa fa-lg fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /.table -->
    </div><!-- /.card-body -->
</div><!-- /.card -->
