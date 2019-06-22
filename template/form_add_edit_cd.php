<?php
/**
 * Created by PhpStorm.
 * User: novikov_BK
 * Date: 22.06.2019
 * Time: 15:14
 */
echo '
<div class="modal fade" id="modalAddEditForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Добавить/редактировать CD</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post" action="inc/add_cd.php">
        <div class="form-group row">
          <div class="col-sm-12">
            <input name="Album_cover" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Название альбома">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-4 mb-3 mb-sm-0">
            <input name="Album_name" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Обложка">
          </div>
          <div class="col-sm-8 mb-3 mb-sm-0">
            <input name="Artist_name" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Артист">
          </div>
          
        </div>
        
        <div class="form-group row">
          <div class="col-sm-3">
            <input name="Year_issue" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Год выпуска">
          </div>
          <div class="col-sm-3 mb-3 mb-sm-0">
            <input name="Album_Duration" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Длительность">
          </div>

          <div class="col-sm-6">
            <input name="Purchase_date" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Дата покупки">
          </div>
          
        </div>
        <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <input name="Purchase_price" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Стоимость покупки">
          </div>
          <div class="col-sm-6">
            <input name="Storage_code" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Код хранилища">
          </div>
        </div>
      <div class="modal-footer d-flex justify-content-center">
        <button id="btn" class="btn btn-deep-orange">Добавить</button>
      </div>

      </form>  
      </div>
    </div>
  </div>
</div>


';

