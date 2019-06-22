<?php
/**
 * Created by PhpStorm.
 * User: novikov_BK
 * Date: 22.06.2019
 * Time: 14:20
 */
    require_once('config.php');
    $connect = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));

    echo '
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">аудио CD</h1>
          <p class="mb-4">Храним только коллекционные CD аудио диски ;)</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">У нас хранится:</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Обложка альбома</th>
                      <th>Название альбома</th>
                      <th>Название артиста</th>
                      <th>Год выпуска</th>
                      <th>Длительность альбома (минут)</th>
                      <th>Дата покупки</th>
                      <th>Стоимость покупки</th>
                      <th>Код хранилища</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Обложка альбома</th>
                      <th>Название альбома</th>
                      <th>Название артиста</th>
                      <th>Год выпуска</th>
                      <th>Длительность альбома (минут)</th>
                      <th>Дата покупки</th>
                      <th>Стоимость покупки</th>
                      <th>Код хранилища</th>
                    </tr>
                  </tfoot>
                  <tbody>';

                    $sql = mysqli_query($connect, $sql_select_sd) or die("Ошибка " . mysqli_error($link));
                    while ($result = mysqli_fetch_array($sql)) {
                        echo "
                                <tr>
                                  <td>{$result['Album_cover']}</td>
                                  <td>{$result['Album_name']}</td>
                                  <td>{$result['Artist_name']}</td>
                                  <td>{$result['Year_issue']}</td>
                                  <td>{$result['Album_Duration']}</td>
                                  <td>{$result['Purchase_date']}</td>
                                  <td>{$result['Purchase_price']}</td>
                                  <td>{$result['Storage_code']}</td>
                                </tr>

                        ";
//                        echo "{$result['Name']}: {$result['Price']} рублей<br>";
                    }

    echo'         </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    
    ';