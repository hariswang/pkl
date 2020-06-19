<!-- Content Header (Page header) -->
<section class="content">

  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Pengaturan Jadwal Ujian Proposal</h3>
    </div>
    <div class="card-body">

      <!--begin::Entry-->
      <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
          <!--begin::Notice-->
          <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
            <div class="alert-icon">
              <span class="svg-icon svg-icon-primary svg-icon-xl">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                    <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                  </g>
                </svg>
                <!--end::Svg Icon-->
              </span>
            </div>
            <div class="alert-text">Menu pengelolanan data mahaiswa yang mendaftar Monitoring Tugas Akhir.
              <br />Info lebih lanjut kunjungi
              <a class="font-weight-bold" href="www.mischooxl.id" target="_blank">mischool.id</a></div>
          </div>
          <!--end::Notice-->
          <!--begin::Card-->
          <div class="card card-custom gutter-b">
            <div class="card-body">
              <!--begin: Datatable-->
              <table class="table table-bordered table-checkable" id="kt_datatable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Judul Proposal</th>
                    <th>Dosen 1</th>
                    <th>Dosen 2</th>
                    <th>Atur Jadwal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php $i = 1; ?>
                  <?php foreach ($mahasiswa as $mhs) : ?>
                    <form class="form" method="post" action="<?= base_url('koordinator/set_ujian_proposal') ?>">
                      <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $mhs->nim; ?></td>
                        <td><?= $mhs->nama; ?></td>
                        <td><?= $mhs->judul; ?></td>
                        <td><?= $mhs->pildos1; ?></td>
                        <td><?= $mhs->pildos2; ?></td>
                        <td>
                          <input type="hidden" class="form-control" value="<?= $mhs->id; ?>" name="id" />
                          <div class="input-group date">
                            <input type="text" class="form-control" value="<?= $mhs->jadwal_ujian_proposal; ?>" id="kt_datepicker_3" name="kt_datepicker_3" />
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="la la-calendar"></i>
                              </span>
                            </div>
                          </div>
                        </td>
                        <td>
                          <button type="submit" class=" btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Set Jadwal</button>
                        </td>
                      </tr>

                    </form>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <!--end: Datatable-->
            </div>
          </div>
          <!--end::Card-->
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>

</section>
<!-- /.content -->

</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->

<script type="text/javascript">
  // Class definition

  var KTBootstrapDatepicker = function() {

    var arrows;
    if (KTUtil.isRTL()) {
      arrows = {
        leftArrow: '<i class="la la-angle-right"></i>',
        rightArrow: '<i class="la la-angle-left"></i>'
      }
    } else {
      arrows = {
        leftArrow: '<i class="la la-angle-left"></i>',
        rightArrow: '<i class="la la-angle-right"></i>'
      }
    }

    // Private functions
    var demos = function() {
      // minimum setup
      $('#kt_datepicker_1').datepicker({
        rtl: KTUtil.isRTL(),
        todayHighlight: true,
        orientation: "bottom left",
        templates: arrows
      });

      // minimum setup for modal demo
      $('#kt_datepicker_1_modal').datepicker({
        rtl: KTUtil.isRTL(),
        todayHighlight: true,
        orientation: "bottom left",
        templates: arrows
      });

      // input group layout
      $('#kt_datepicker_2').datepicker({
        rtl: KTUtil.isRTL(),
        todayHighlight: true,
        orientation: "bottom left",
        templates: arrows
      });

      // input group layout for modal demo
      $('#kt_datepicker_2_modal').datepicker({
        rtl: KTUtil.isRTL(),
        todayHighlight: true,
        orientation: "bottom left",
        templates: arrows
      });

      // enable clear button
      $('#kt_datepicker_3, #kt_datepicker_3_validate').datepicker({
        rtl: KTUtil.isRTL(),
        todayBtn: "linked",
        clearBtn: true,
        todayHighlight: true,
        templates: arrows
      });

      // enable clear button for modal demo
      $('#kt_datepicker_3_modal').datepicker({
        rtl: KTUtil.isRTL(),
        todayBtn: "linked",
        clearBtn: true,
        todayHighlight: true,
        templates: arrows
      });

      // orientation
      $('#kt_datepicker_4_1').datepicker({
        rtl: KTUtil.isRTL(),
        orientation: "top left",
        todayHighlight: true,
        templates: arrows
      });

      $('#kt_datepicker_4_2').datepicker({
        rtl: KTUtil.isRTL(),
        orientation: "top right",
        todayHighlight: true,
        templates: arrows
      });

      $('#kt_datepicker_4_3').datepicker({
        rtl: KTUtil.isRTL(),
        orientation: "bottom left",
        todayHighlight: true,
        templates: arrows
      });

      $('#kt_datepicker_4_4').datepicker({
        rtl: KTUtil.isRTL(),
        orientation: "bottom right",
        todayHighlight: true,
        templates: arrows
      });

      // range picker
      $('#kt_datepicker_5').datepicker({
        rtl: KTUtil.isRTL(),
        todayHighlight: true,
        templates: arrows
      });

      // inline picker
      $('#kt_datepicker_6').datepicker({
        rtl: KTUtil.isRTL(),
        todayHighlight: true,
        templates: arrows
      });
    }

    return {
      // public functions
      init: function() {
        demos();
      }
    };
  }();

  jQuery(document).ready(function() {
    KTBootstrapDatepicker.init();
  });
</script>