<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="Tugas Pemrograman Web" />
  <meta name="author" content="Dimas Aprilian - 118140032" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Title -->
  <title>Tugas Pemrograman Web - Dimas Aprilian - 118140032</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid ">
    <h1 class="text-center">Tugas Pemrograman Web - Dimas Aprilian</h1>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header bg-dark text-white">
            Simple Calculator
          </div>
          <div class="card-body">
            <form action="calc.php" method="POST">
              <div class="form-group">
                <label for="number1">Number 1</label>
                <input type="number" class="form-control" name="number1" placeholder="10">
              </div>
              <div class="form-group">
                <label for="number2">Number 2</label>
                <input type="number" class="form-control" name="number2" placeholder="15">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <select class="form-control" name="operator">
                  <option value="+">+</option>
                  <option value="-">-</option>
                  <option value="/">/</option>
                  <option value="*">*</option>
                  <option value="%">%</option>
                </select>
              </div>
              <button type="submit" name="calc" class="btn btn-dark">Submit</button>
            </form>
            


          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <div class="card-header bg-dark text-white">
            Result
          </div>
          <div class="card-body" id="result" style="height: 300px;">
            <?php
              if(isset($_POST['calc'])){
                $num1 = $_POST['number1'];
                $num2 = $_POST['number2'];
                $op = $_POST['operator'];
                
                switch ($op){
                  case "+":
                    $count = $num1 + $num2;
                    break;
                  case "-":
                    $count = $num1 - $num2;
                    break;
                  case "*":
                    $count = $num1 * $num2;
                    break;
                  case "/":
                    $count = $num1 / $num2;
                    break;
                  case "%":
                    $count = $num1 % $num2;
                    break;
                }
                echo '<div class="alert alert-success" style="color: #000">'.$count.'</div>';
              }
              ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header bg-dark text-white">
            Sort Data
          </div>
          <div class="card-body" id="result" style="height: 300px;">
            <p>Buatlah program untuk mengurutkan data dari 10 buah data yang acak!<br>
              (“larine”, “aduh”, “qifuat”, “toda”, “anevi”, “samid”, “kifuat”);</p>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <div class="card-header bg-dark text-white">
            Result
          </div>
          <div class="card-body" id="resultSort" style="height: 300px;">
            <?php
                $data = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
                function bubbleSort($data){
                  for($i = 0; $i < count($data); $i++){
                      for($j = $i+1; $j < count($data); $j++){
                          if($data[$i] > $data[$j]){
                              $temp = $data[$i];
                              $data[$i] = $data[$j];
                              $data[$j] = $temp;
                          }
                      }
                  }
                  for($i = 0; $i < count($data); $i++){
                    echo $data[$i].'<br>';
                  }
                }
                
                bubbleSort($data);
                ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header bg-dark text-white">
            Sort Data
          </div>
          <div class="card-body" id="result" style="height: 300px;">
            <p>Buatlah program untuk mencari bilangan prima dari 1 - 50 tanpa menggunakan fungsi
              bawaan!</p>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="card">
          <div class="card-header bg-dark text-white">
            Result
          </div>
          <div class="card-body" id="resultPrime" style="height: 300px;">
                <?php
                function isPrime(){                        
                  for($i = 1; $i <= 50; $i++){
                    $cnt = 0;
                    for($j = 1; $j <= $i; $j++){
                        if($i % $j == 0){
                            $cnt++;
                        }
                    }
                    if($cnt==2){
                        echo $i.' ';
                    }
                  }
              } 
              
              isPrime();
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>