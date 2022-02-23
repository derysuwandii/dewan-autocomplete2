<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="dk.png">
    <title>Dewan Autocomplete JQUERY - www.dewankomputer.com</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.autocomplete.min.js"></script>
    <style>
       .autocomplete-suggestions {
           border: 1px solid #999;
           background: #FFF;
           overflow: auto;
       }
       .autocomplete-suggestion {
           padding: 2px 5px;
           white-space: nowrap;
           overflow: hidden;
       }
       .autocomplete-selected {
           background: #F0F0F0;
       }
       .autocomplete-suggestions strong {
           font-weight: normal;
           color: #3399FF;
       }
       .autocomplete-group {
           padding: 2px 5px;
       }
       .autocomplete-group strong {
           display: block;
           border-bottom: 1px solid #000;
       }
    </style>
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand text-white" href="index.php">
        Dewan Komputer
      </a>
    </nav>

    <div class="container">
      <h3 align="center" class="mt-3 mb-5">Cara Membuat Autocomplete dengan Plugin pada PHP</h3>
      <div class="row">
        <div class="col-sm-6 offset-sm-3">
          <label>Nama Provinsi</label>  
          <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="Tulis Nama Provinsi Indonesia" />  
        </div>
      </div>
    </div>

    <div class="fixed-bottom text-center mt-5">© <?php echo date('Y'); ?> Copyright:
      <a href="https://dewankomputer.com/"> Dewan Komputer</a>
    </div>

    <script type="text/javascript">
      $(document).ready(function() {
        $( "#provinsi" ).autocomplete({
          serviceUrl: "search.php",   // Kode php untuk prosesing data
          dataType: "JSON",           // Tipe data JSON
          onSelect: function (suggestion) {
              $( "#provinsi" ).val(suggestion.nama);
          }
        });
      })
  </script>
</body>
</html>  
