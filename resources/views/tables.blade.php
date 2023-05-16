@extends ('content.master')

@section ('title', 'Shop')
@section ('content')

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/style.css">
      <title>Restorant</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

      <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  </head>
  <body>
     <nav class="navbar navbar-dark navbar-expand-lg bg-warning">
  <div class="container">
<a class="navbar-brand" href="#">
      <img src="/img/wikrama.png" alt="Bootstrap" width="50" height="50">
      <a class="nav-link active text-dark" aria-current="page" href="#">CAFE BDP</>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
<button type="button" class="btn btn-primary">BERANDA</button>
<button type="button" class="btn btn-success">KERANJANG</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="table-cart">
    <table class="table">
        <tr class="table-in">
            <th> Product </th>
            <th> Price </th>
            <th> Quantity </th>
            <th> Subtotal </th>
            <th> Action </th>
        </tr>
        <hr class="solid">
        <tr class="table-in">
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td>Lorem</td>
            <td class="delete">
                <form action="">
                    <input class="delete-button" type="submit" value="Delete">
                </form>
            </td>
        </tr>
    </table>
    <br><hr class="hr">
    <div>
        <h1 class="total-price">Total Rp.18000</h1>
    </div>
    <hr class="hr">
    <div class="cart-action">
        <form action="">
            <input class="back-action" type="submit" value="Continue Shopping">
        </form>
        <form action="">
            <input class="checkout-action" type="submit" value="Checkout">
        </form>
    </div>
</div>

