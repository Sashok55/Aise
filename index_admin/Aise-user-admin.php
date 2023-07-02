<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="../img/A.svg">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <!DOCTYPE html>
  <title>Админ-панель</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>   
  <script src="../js/script.js"></script>

  <!-- Скрипт для Products -->
  <script>
    // Функция для обновления данных на странице
    function updateProducts() {
      $.ajax({
        url: "../php/get_products.php",
        type: "GET",
        success: function(data) {
          $("#productList").html(data);
        }
      });
    }

    // Отправка формы добавления продукта через AJAX
    $(document).on("submit", "#addProductForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/add_product.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateProducts();
        }
      });
    });

    // Отправка формы изменения продукта через AJAX
    $(document).on("submit", "#editProductForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/edit_product.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateProducts();
        }
      });
    });

    // Отправка формы удаления продукта через AJAX
    $(document).on("submit", "#deleteProductForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/delete_product.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateProducts();
        }
      });
    });

    // Обновление данных при загрузке страницы
    $(document).ready(function() {
      updateProducts();
    });
  </script>



<!-- Скрипт для Agents -->
<script>
    // Функция для обновления данных на странице
    function updateAgents() {
      $.ajax({
        url: "../php/get_Agents.php",
        type: "GET",
        success: function(data) {
          $("#AgentsList").html(data);
        }
      });
    }

    // Отправка формы добавления продукта через AJAX
    $(document).on("submit", "#addAgentsForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/add_Agents.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateAgents();
        }
      });
    });

    // Отправка формы изменения продукта через AJAX
    $(document).on("submit", "#editAgentsForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/edit_Agents.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateAgents();
        }
      });
    });

    // Отправка формы удаления продукта через AJAX
    $(document).on("submit", "#deleteAgentsForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/delete_Agents.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateAgents();
        }
      });
    });

    // Обновление данных при загрузке страницы
    $(document).ready(function() {
      updateAgents();
    });
    </script>

    
    <!-- Скрипт для Clients -->
    <script>
        // Функция для обновления данных на странице
        function updateClients() {
          $.ajax({
            url: "../php/get_Clients.php",
            type: "GET",
            success: function(data) {
              $("#ClientsList").html(data);
            }
          });
        }
    
        // Отправка формы добавления продукта через AJAX
        $(document).on("submit", "#addClientsForm", function(e) {
          e.preventDefault();
          $.ajax({
            url: "../php/add_Clients.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(data) {
              alert(data);
              updateClients();
            }
          });
        });
    
        // Отправка формы изменения продукта через AJAX
        $(document).on("submit", "#editClientsForm", function(e) {
          e.preventDefault();
          $.ajax({
            url: "../php/edit_Clients.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(data) {
              alert(data);
              updateClients();
            }
          });
        });
    
        // Отправка формы удаления продукта через AJAX
        $(document).on("submit", "#deleteClientsForm", function(e) {
          e.preventDefault();
          $.ajax({
            url: "../php/delete_Clients.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(data) {
              alert(data);
              updateClients();
            }
          });
        });
    
        // Обновление данных при загрузке страницы
        $(document).ready(function() {
          updateClients();
        });
      </script>


<!-- Скрипт для Deals -->
<script>
    // Функция для обновления данных на странице
    function updateDeals() {
      $.ajax({
        url: "../php/get_Deals.php",
        type: "GET",
        success: function(data) {
          $("#DealsList").html(data);
        }
      });
    }

    // Отправка формы добавления продукта через AJAX
    $(document).on("submit", "#addDealsForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/add_Deals.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateDeals();
        }
      });
    });

    // Отправка формы изменения продукта через AJAX
    $(document).on("submit", "#editDealsForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/edit_Deals.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateDeals();
        }
      });
    });

    // Отправка формы удаления продукта через AJAX
    $(document).on("submit", "#deleteDealsForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/delete_Deals.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateDeals();
        }
      });
    });

    // Обновление данных при загрузке страницы
    $(document).ready(function() {
      updateDeals();
    });
  </script>


<!-- Скрипт для District -->
<script>
    // Функция для обновления данных на странице
    function updateDistrict() {
      $.ajax({
        url: "../php/get_District.php",
        type: "GET",
        success: function(data) {
          $("#DistrictList").html(data);
        }
      });
    }

    // Отправка формы добавления продукта через AJAX
    $(document).on("submit", "#addDistrictForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/add_District.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateDistrict();
        }
      });
    });

    // Отправка формы изменения продукта через AJAX
    $(document).on("submit", "#editDistrictForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/edit_District.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateDistrict();
        }
      });
    });

    // Отправка формы удаления продукта через AJAX
    $(document).on("submit", "#deleteDistrictForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/delete_District.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateDistrict();
        }
      });
    });

    // Обновление данных при загрузке страницы
    $(document).ready(function() {
      updateDistrict();
    });
  </script>

<!-- Скрипт для Rooms -->
<script>
    // Функция для обновления данных на странице
    function updateRooms() {
      $.ajax({
        url: "../php/get_Rooms.php",
        type: "GET",
        success: function(data) {
          $("#RoomsList").html(data);
        }
      });
    }

    // Отправка формы добавления продукта через AJAX
    $(document).on("submit", "#addRoomsForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/add_Rooms.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateRooms();
        }
      });
    });

    // Отправка формы изменения продукта через AJAX
    $(document).on("submit", "#editRoomsForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/edit_Rooms.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateRooms();
        }
      });
    });

    // Отправка формы удаления продукта через AJAX
    $(document).on("submit", "#deleteRoomsForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/delete_Rooms.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateRooms();
        }
      });
    });

    // Обновление данных при загрузке страницы
    $(document).ready(function() {
      updateRooms();
    });
    </script>


<!-- Скрипт для Status -->
<script>
    // Функция для обновления данных на странице
    function updateStatus() {
      $.ajax({
        url: "../php/get_Status.php",
        type: "GET",
        success: function(data) {
          $("#StatusList").html(data);
        }
      });
    }

    // Отправка формы добавления продукта через AJAX
    $(document).on("submit", "#addStatusForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/add_Status.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateStatus();
        }
      });
    });

    // Отправка формы изменения продукта через AJAX
    $(document).on("submit", "#editStatusForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/edit_Status.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateStatus();
        }
      });
    });

    // Отправка формы удаления продукта через AJAX
    $(document).on("submit", "#deleteStatusForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/delete_Status.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateStatus();
        }
      });
    });

    // Обновление данных при загрузке страницы
    $(document).ready(function() {
      updateStatus();
    });
    </script>

    
<!-- Скрипт для Type -->
<script>
    // Функция для обновления данных на странице
    function updateType() {
      $.ajax({
        url: "../php/get_Type.php",
        type: "GET",
        success: function(data) {
          $("#TypeList").html(data);
        }
      });
    }

    // Отправка формы добавления продукта через AJAX
    $(document).on("submit", "#addTypeForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/add_Type.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateType();
        }
      });
    });

    // Отправка формы изменения продукта через AJAX
    $(document).on("submit", "#editTypeForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/edit_Type.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateType();
        }
      });
    });

    // Отправка формы удаления продукта через AJAX
    $(document).on("submit", "#deleteTypeForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/delete_Type.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateType();
        }
      });
    });

    // Обновление данных при загрузке страницы
    $(document).ready(function() {
      updateType();
    });
    </script>


<!-- Скрипт для Users -->
<script>
    // Функция для обновления данных на странице
    function updateUsers() {
      $.ajax({
        url: "../php/get_Users.php",
        type: "GET",
        success: function(data) {
          $("#UsersList").html(data);
        }
      });
    }

    // Отправка формы добавления продукта через AJAX
    $(document).on("submit", "#addUsersForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/add_Users.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateUsers();
        }
      });
    });

    // Отправка формы изменения продукта через AJAX
    $(document).on("submit", "#editUsersForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/edit_Users.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateUsers();
        }
      });
    });

    // Отправка формы удаления продукта через AJAX
    $(document).on("submit", "#deleteUsersForm", function(e) {
      e.preventDefault();
      $.ajax({
        url: "../php/delete_Users.php",
        type: "POST",
        data: $(this).serialize(),
        success: function(data) {
          alert(data);
          updateUsers();
        }
      });
    });

    // Обновление данных при загрузке страницы
    $(document).ready(function() {
      updateUsers();
    });
    </script>

</head>
<body>
  <div class="admin-tools">
    <h1>Админ-панель</h1>
  </div> 
<div class="adminka">

  <div class="admin-tools">
    <!-- Форма для добавления продукта -->
    <div>
      <h2>Добавить дом</h2>
      <form id="addProductForm">
    <div>
        <label for="name">Название</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label for="price">Цена</label>
        <input type="text" name="price" required>
    </div>
    <div>
        <label for="description">Описание</label>
        <textarea name="description" required></textarea>
    </div>
    <div>
        <label for="img">Изображение</label>
        <input type="text" name="img" required>
    </div>
    <div>
        <label for="district_id">ID района</label>
        <input type="text" name="district_id" required>
    </div>
    <div>
        <label for="type_id">ID типа</label>
        <input type="text" name="type_id" required>
    </div>
    <div>
        <label for="agent_id">ID агента</label>
        <input type="text" name="agent_id" required>
    </div>
    <div>
        <label for="status_id">ID статуса</label>
        <input type="text" name="status_id" required>
    </div>
    <div>
        <label for="rooms_id">ID комнат</label>
        <input type="text" name="rooms_id" required>
    </div>
    <div>
        <label for="area">Площадь</label>
        <input type="text" name="area" required>
    </div>
    <div>
        <label for="sale_date">Дата продажи</label>
        <input type="text" name="sale_date" required>
    </div>
    <input type="submit" value="Добавить продукт">
</form>
    </div>
  </div> 
  <div class="admin-tools">
  <!-- Форма для изменения продукта -->
    <div>
      <h2>Редактировать дом</h2>
      <form id="editProductForm">
        <div>
          <label for="id">ID дома:</label>
          <input type="text" name="id" required>
        </div>
        <div>
        <label for="name">Название</label>
        <input type="text" name="new_name" required>
    </div>
    <div>
        <label for="price">Цена</label>
        <input type="text" name="new_price" required>
    </div>
    <div>
        <label for="description">Описание</label>
        <textarea name="new_description" required></textarea>
    </div>
    <div>
        <label for="img">Изображение</label>
        <input type="text" name="new_img" required>
    </div>
    <div>
        <label for="district_id">ID района</label>
        <input type="text" name="new_district_id" required>
    </div>
    <div>
        <label for="type_id">ID типа</label>
        <input type="text" name="new_type_id" required>
    </div>
    <div>
        <label for="agent_id">ID агента</label>
        <input type="text" name="new_agent_id" required>
    </div>
    <div>
        <label for="status_id">ID статуса</label>
        <input type="text" name="new_status_id" required>
    </div>
    <div>
        <label for="rooms_id">ID комнат</label>
        <input type="text" name="new_rooms_id" required>
    </div>
    <div>
        <label for="area">Площадь</label>
        <input type="text" name="new_area" required>
    </div>
    <div>
        <label for="sale_date">Дата продажи</label>
        <input type="text" name="new_sale_date" required>
    </div>      
        <input type="submit" value="Изменить продукт">
      </form>
    </div>
  </div>
    
  <div class="admin-tools">
  <!-- Форма для удаления продукта -->
    <div>
      <h2>Удалить дом</h2>
      <form id="deleteProductForm">
        <div>
          <label for="id">ID продукта</label>
          <input type="text" name="id" required>
        </div>
        <input type="submit" value="Удалить продукт">
      </form>
    </div>
  </div>
</div>
  
  <div class="admin-tools">
    <!-- Список продуктов -->
    <div>
      <h2>Список домов</h2>
      <div id="productList"></div>
    </div>
  </div>

  <div class="adminka">
    <div class="admin-tools">
      <!-- Форма для добавления продукта -->
      <div>
        <h2>Добавить клиента</h2>
        <form id="addclientForm">
          <div>
            <label for="name">Имя</label>
            <input type="text" name="name" required>
          </div>
          <div>
            <label for="budget">Бюджет</label>
            <input type="text" name="budget" required>
          </div>
          <input type="submit" value="Добавить продукт">
        </form>
      </div>
    </div> 
    <div class="admin-tools">
      <!-- Форма для изменения продукта -->
      <div>
        <h2>Редактировать клиента</h2>
        <form id="editclientForm">
          <div>
            <label for="id">ID клиента</label>
            <input type="text" name="id" required>
          </div>
          <div>
            <label for="name">Имя</label>
            <input type="text" name="new_name" required>
          </div>
          <div>
            <label for="budget">Бюджет</label>
            <input type="text" name="new_budget" required>
          </div>
          <input type="submit" value="Изменить продукт">
        </form>
      </div>
    </div>
    <div class="admin-tools">
      <!-- Форма для удаления продукта -->
      <div>
        <h2>Удалить клиента</h2>
        <form id="deleteclientForm">
          <div>
            <label for="id_clients">ID клиента</label>
            <input type="text" name="id_clients" required>
          </div>
          <input type="submit" value="Удалить продукт">
        </form>
      </div>
    </div>
  </div>
  <div class="admin-tools">
    <!-- Список продуктов -->
    <div>
      <h2>Список клиентов</h2>
      <div id="ClientsList"></div>
    </div>
  </div>

  <div class="adminka">
    <div class="admin-tools">
      <!-- Форма для добавления агента -->
      <div>
        <h2>Добавить агента</h2>
        <form id="addAgentsForm">
          <div>
            <label for="name">Имя</label>
            <input type="text" name="name" required>
          </div>
          <div>
            <label for="contact_number">Контактный номер</label>
            <input type="text" name="contact_number" required>
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
          </div>
          <input type="submit" value="Добавить агента">
        </form>
      </div>
    </div> 
    <div class="admin-tools">
      <!-- Форма для изменения агента -->
      <div>
        <h2>Редактировать агента</h2>
        <form id="editAgentsForm">
          <div>
            <label for="id_agents">ID агента:</label>
            <input type="text" name="id_agents" required>
          </div>
          <div>
            <label for="name">Имя</label>
            <input type="text" name="new_name" required>
          </div>
          <div>
            <label for="contact_number">Контактный номер</label>
            <input type="text" name="new_contact_number" required>
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="new_email" required>
          </div>
          <input type="submit" value="Изменить агента">
        </form>
      </div>
    </div>
    <div class="admin-tools">
      <!-- Форма для удаления агента -->
      <div>
        <h2>Удалить агента</h2>
        <form id="deleteAgentsForm">
          <div>
            <label >ID агента</label>
            <input type="text" name="id_agents" required>
          </div>
          <input type="submit" value="Удалить агента">
        </form>
      </div>
    </div>
  </div>
  <div class="admin-tools">
    <!-- Список агентов -->
    <div>
      <h2>Список агентов</h2>
      <div id="AgentsList"></div>
    </div>
  </div>
 
  <div class="adminka">
    <div class="admin-tools">
      <!-- Форма для добавления сделки -->
      <div>
        <h2>Добавить сделку</h2>
        <form id="addDealsForm">
          <div>
            <label for="home_id">ID дома</label>
            <input type="text" name="home_id" required>
          </div>
          <div>
            <label for="client_id">ID клиента</label>
            <input type="text" name="client_id" required>
          </div>
          <div>
            <label for="agent_id">ID агента</label>
            <input type="text" name="agent_id" required>
          </div>
          <div>
            <label for="deal_amount">Сумма сделки</label>
            <input type="text" name="deal_amount" required>
          </div>
          <div>
            <label for="deal_date">Дата сделки</label>
            <input type="text" name="deal_date" required>
          </div>
          <input type="submit" value="Добавить сделку">
        </form>
      </div>
    </div> 
    <div class="admin-tools">
      <!-- Форма для изменения сделки -->
      <div>
        <h2>Редактировать сделку</h2>
        <form id="editDealsForm">
          <div>
            <label for="id_deals">ID сделки:</label>
            <input type="text" name="id_deals" required>
          </div>
          <div>
            <label for="home_id">ID дома</label>
            <input type="text" name="new_home_id" required>
          </div>
          <div>
            <label for="client_id">ID клиента</label>
            <input type="text" name="new_client_id" required>
          </div>
          <div>
            <label for="agent_id">ID агента</label>
            <input type="text" name="new_agent_id" required>
          </div>
          <div>
            <label for="deal_amount">Сумма сделки</label>
            <input type="text" name="new_deal_amount" required>
          </div>
          <div>
            <label for="deal_date">Дата сделки</label>
            <input type="text" name="new_deal_date" required>
          </div>
          <input type="submit" value="Изменить сделку">
        </form>
      </div>
    </div>
    <div class="admin-tools">
      <!-- Форма для удаления сделки -->
      <div>
        <h2>Удалить сделку</h2>
        <form id="deleteDealsForm">
          <div>
            <label for="id_deals">ID сделки</label>
            <input type="text" name="id_deals" required>
          </div>
          <input type="submit" value="Удалить сделку">
        </form>
      </div>
    </div>
  </div>
  <div class="admin-tools">
    <!-- Список сделок -->
    <div>
      <h2>Список сделок</h2>
      <div id="DealsList"></div>
    </div>
  </div>

  <div class="adminka">
    <div class="admin-tools">
      <!-- Форма для добавления района -->
      <div>
        <h2>Добавить район</h2>
        <form id="addDistrictForm">
          <div>
            <label for="name">Название</label>
            <input type="text" name="name" required>
          </div>
          <input type="submit" value="Добавить район">
        </form>
      </div>
    </div> 
    <div class="admin-tools">
      <!-- Форма для изменения района -->
      <div>
        <h2>Редактировать район</h2>
        <form id="editDistrictForm">
          <div>
            <label for="id_district">ID района:</label>
            <input type="text" name="id_district" required>
          </div>
          <div>
            <label for="name">Название</label>
            <input type="text" name="new_name" required>
          </div>
          <input type="submit" value="Изменить район">
        </form>
      </div>
    </div>
    <div class="admin-tools">
      <!-- Форма для удаления района -->
      <div>
        <h2>Удалить район</h2>
        <form id="deleteDistrictForm">
          <div>
            <label for="id_district">ID района</label>
            <input type="text" name="id_district" required>
          </div>
          <input type="submit" value="Удалить район">
        </form>
      </div>
    </div>
  </div>
  <div class="admin-tools">
    <!-- Список районов -->
    <div>
      <h2>Список районов</h2>
      <div id="DistrictList"></div>
    </div>
  </div>

  <div class="adminka">
    <div class="admin-tools">
      <!-- Форма для добавления комнаты -->
      <div>
        <h2>Добавить комнату</h2>
        <form id="addRoomsForm">
          <div>
            <label for="name">Название</label>
            <input type="text" name="name" required>
          </div>
          <input type="submit" value="Добавить комнату">
        </form>
      </div>
    </div> 
    <div class="admin-tools">
      <!-- Форма для изменения комнаты -->
      <div>
        <h2>Редактировать комнату</h2>
        <form id="editRoomsForm">
          <div>
            <label for="id_rooms">ID комнаты:</label>
            <input type="text" name="id_rooms" required>
          </div>
          <div>
            <label for="name">Название</label>
            <input type="text" name="new_name" required>
          </div>
          <input type="submit" value="Изменить комнату">
        </form>
      </div>
    </div>
    <div class="admin-tools">
      <!-- Форма для удаления комнаты -->
      <div>
        <h2>Удалить комнату</h2>
        <form id="deleteRoomsForm">
          <div>
            <label for="id_rooms">ID комнаты</label>
            <input type="text" name="id_rooms" required>
          </div>
          <input type="submit" value="Удалить комнату">
        </form>
      </div>
    </div>
  </div>
  <div class="admin-tools">
    <!-- Список комнат -->
    <div>
      <h2>Список комнат</h2>
      <div id="RoomsList"></div>
    </div>
  </div>

  <div class="adminka">
    <div class="admin-tools">
      <!-- Форма для добавления статуса -->
      <div>
        <h2>Добавить статус</h2>
        <form id="addStatusForm">
          <div>
            <label for="name">Название</label>
            <input type="text" name="name" required>
          </div>
          <input type="submit" value="Добавить статус">
        </form>
      </div>
    </div> 
    <div class="admin-tools">
      <!-- Форма для изменения статуса -->
      <div>
        <h2>Редактировать статус</h2>
        <form id="editStatusForm">
          <div>
            <label for="id_status">ID статуса:</label>
            <input type="text" name="id_status" required>
          </div>
          <div>
            <label for="name">Название</label>
            <input type="text" name="new_name" required>
          </div>
          <input type="submit" value="Изменить статус">
        </form>
      </div>
    </div>
    <div class="admin-tools">
      <!-- Форма для удаления статуса -->
      <div>
        <h2>Удалить статус</h2>
        <form id="deleteStatusForm">
          <div>
            <label for="id_status">ID статуса</label>
            <input type="text" name="id_status" required>
          </div>
          <input type="submit" value="Удалить статус">
        </form>
      </div>
    </div>
  </div>
  <div class="admin-tools">
    <!-- Список статусов -->
    <div>
      <h2>Список статусов</h2>
      <div id="StatusList"></div>
    </div>
  </div>

  <div class="adminka">
    <div class="admin-tools">
      <!-- Форма для добавления типа -->
      <div>
        <h2>Добавить тип</h2>
        <form id="addTypeForm">
          <div>
            <label for="name">Название</label>
            <input type="text" name="name" required>
          </div>
          <input type="submit" value="Добавить тип">
        </form>
      </div>
    </div> 
    <div class="admin-tools">
      <!-- Форма для изменения типа -->
      <div>
        <h2>Редактировать тип</h2>
        <form id="editTypeForm">
          <div>
            <label for="id_type">ID типа:</label>
            <input type="text" name="id_type" required>
          </div>
          <div>
            <label for="name">Название</label>
            <input type="text" name="new_name" required>
          </div>
          <input type="submit" value="Изменить тип">
        </form>
      </div>
    </div>
    <div class="admin-tools">
      <!-- Форма для удаления типа -->
      <div>
        <h2>Удалить тип</h2>
        <form id="deleteTypeForm">
          <div>
            <label for="id_type">ID типа</label>
            <input type="text" name="id_type" required>
          </div>
          <input type="submit" value="Удалить тип">
        </form>
      </div>
    </div>
  </div>
  <div class="admin-tools">
    <!-- Список типов -->
    <div>
      <h2>Список типов</h2>
      <div id="TypeList"></div>
    </div>
  </div>

  <div class="adminka">
    <div class="admin-tools">
      <!-- Форма для добавления пользователя -->
      <div>
        <h2>Добавить пользователя</h2>
        <form id="addUsersForm">
          <div>
            <label for="login">Логин</label>
            <input type="text" name="login" required>
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
          </div>
          <div>
            <label for="password">Пароль</label>
            <input type="password" name="password" required>
          </div>
          <div>
            <label for="is_admin">Администратор</label>
            <select name="is_admin" required>
              <option value="0">Нет</option>
              <option value="1">Да</option>
            </select>
          </div>
          <div>
            <label for="verification_code">Код верификации</label>
            <input type="text" name="verification_code" required>
          </div>
          <input type="submit" value="Добавить пользователя">
        </form>
      </div>
    </div> 
    <div class="admin-tools">
      <!-- Форма для изменения пользователя -->
      <div>
        <h2>Редактировать пользователя</h2>
        <form id="editUsersForm">
          <div>
            <label for="id_users">ID пользователя:</label>
            <input type="text" name="id_users" required>
          </div>
          <div>
            <label for="login">Логин</label>
            <input type="text" name="new_login" required>
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="new_email" required>
          </div>
          <div>
            <label for="password">Пароль</label>
            <input type="password" name="new_password" required>
          </div>
          <div>
            <label for="is_admin">Администратор</label>
            <select name="new_is_admin" required>
              <option value="0">Нет</option>
              <option value="1">Да</option>
            </select>
          </div>
          <div>
            <label for="verification_code">Код верификации</label>
            <input type="text" name="new_verification_code" required>
          </div>
          <input type="submit" value="Изменить пользователя">
        </form>
      </div>
    </div>    
    <div class="admin-tools">
      <!-- Форма для удаления пользователя -->
      <div>
        <h2>Удалить пользователя</h2>
        <form id="deleteUsersForm">
          <div>
            <label for="id_users">ID пользователя</label>
            <input type="text" name="id_users" required>
          </div>
          <input type="submit" value="Удалить пользователя">
        </form>
      </div>
    </div>
  </div>
  <div class="admin-tools">
    <!-- Список пользователей -->
    <div>
      <h2>Список пользователей</h2>
      <div id="UsersList"></div>
    </div>
  </div>
  
  <div class="admin-tools">
    <div >
      <div id="result"></div>
      <h1>Запросы</h1>
      <div>
        <div>
          <p>Получить список всех домов в определенном районе</p>
          <button onclick="sendRequest(1)">Запрос 1</button>
        </div>
        <div>
          <p>Получить список всех клиентов, заинтересованных в домах определенного типа</p>
          <button onclick="sendRequest(2)">Запрос 2</button>
        </div>
        <div>
          <p>Получить список всех сделок, заключенных агентом недвижимости с определенным идентификатором</p>
          <button onclick="sendRequest(3)">Запрос 3</button>
        </div>
      </div>
      <div>
        <div>
          <p>Получить список всех домов с указанием их стоимости и агента недвижимости, ответственного за продажу</p>
          <button onclick="sendRequest(4)">Запрос 4</button>
        </div>
        <div>
          <p>Получить список всех клиентов, совершивших сделку на определенную сумму и с указанием дома, который был продан</p>
          <button onclick="sendRequest(5)">Запрос 5</button>
        </div>
        <div>
          <p>Получить список всех домов, доступных для продажи на определенную дату</p>
          <button onclick="sendRequest(6)">Запрос 6</button>
        </div>
      </div>
      <div>
        <div>
          <p>Получить список всех агентов недвижимости и общей суммы сделок, заключенных каждым агентом</p>
          <button onclick="sendRequest(7)">Запрос 7</button>
        </div>
        <div>
          <p>Получить список всех доступных домов определенного типа</p>
          <button onclick="sendRequest(8)">Запрос 8</button>
        </div>
        <div>
          <p>Получить список всех клиентов, у которых бюджет позволяет приобрести дома в определенном ценовом диапазоне</p>
          <button onclick="sendRequest(9)">Запрос 9</button>
        </div>
        <div>
          <div>
            <p>Получить список всех домов, с указанием количества комнат и площади каждого дома, статуса продажи и стоимости</p>
            <button onclick="sendRequest(10)">Запрос 10</button>
          </div>        
        </div>
      </div>
    </div>
  </div>
</body>
<?php
  include "footer-login.php";
?> 
</html>

