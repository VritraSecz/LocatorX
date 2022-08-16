<?php

if (isset($_POST['search'])) {
  $ip = $_POST['IP'];
  $url = "https://api.ipgeolocation.io/ipgeo?apiKey=878616b30ab84e5eb0273710ee484e73&ip=$ip";
  $data = file_get_contents($url);
  $json = json_decode($data, true);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="logo.png">
  <script src="https://kit.fontawesome.com/d944a6b58d.js" crossorigin="anonymous"></script>
  <title>TraceX: Trace any IP address for FREE</title>
</head>

<body>
  <div class="search">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mx-auto">
          <div class="txt text-center">
            <img src="logo.png" >
            <h1>Trace X</h1>
            <p>Scan Any IP Address for FREE</p>
          </div>
          <form class="form" action="" method="post">
            <input type="text" class="input me-2" name="IP" placeholder="Enter An IP Address" required />
            <button type="submit" name="search" class="btn">
              Trace
            </button>
          </form>
        </div>
      </div>
      <?php if (isset($_POST['search'])) { ?>
        <div class="row mt-3">
          <div class="col-md-4 mx-auto">
          <p class="detail">Victim's Live Location</p>
           <iframe id="gmap_canvas" class="map" width="100%" height="400px" src="https://maps.google.com/maps?q=<?php echo $json['latitude']; ?>,<?php echo $json['longitude']; ?>&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <table class="item table table-bordered h-100 p-4 first">
              <tbody>
               <p class="detail" >Check More detail of your victim</p>
                <tr>
                  <td>Target IP:</td>
                  <td><?php echo $json['ip']; ?></td>
                </tr>
                <tr>
                  <td>City:</td>
                  <td><?php echo $json['city']; ?></td>
                </tr>
                <tr>
                  <td>Calling Code:</td>
                  <td><?php echo $json['calling_code']; ?></td>
                </tr>
                <tr>
                  <td>connection Type:</td>
                  <td><?php echo $json['connection_type']; ?></td>
                </tr>
                <tr>
                  <td>Continent Code:</td>
                  <td><?php echo $json['continent_code']; ?></td>
                </tr>
                <tr>
                  <td>Continent Name:</td>
                  <td><?php echo $json['continent_name']; ?></td>
                </tr>
                <tr>
                  <td>Country Capital:</td>
                  <td><?php echo $json['country_capital']; ?></td>
                </tr>
                <tr>
                  <td>Country Code 2:</td>
                  <td><?php echo $json['country_code2']; ?></td>
                </tr>
                <tr>
                  <td>Country Code 3:</td>
                  <td><?php echo $json['country_code3']; ?></td>
                </tr>
                <tr>
                  <td>Country Name:</td>
                  <td><?php echo $json['country_name']; ?></td>
                </tr>
                <tr>
                  <td>Country Flag:</td>
                  <td><img src="<?php echo $json['country_flag']; ?>" class="flax"></td>
                </tr>
                <tr>
                  <td>Country TLD:</td>
                  <td><?php echo $json['country_tld']; ?></td>
                </tr>
                <tr>
                  <td>District:</td>
                  <td><?php echo $json['district']; ?></td>
                </tr>
                <tr>
                  <td>Geoname ID:</td>
                  <td><?php echo $json['geoname_id']; ?></td>
                </tr>
                <tr>
                  <td>IS European Union:</td>
                  <td><?php echo $json['is_eu']; ?></td>
                </tr>
                <tr>
                  <td>ISP:</td>
                  <td><?php echo $json['isp']; ?></td>
                </tr>
                <tr>
                  <td>Latitude:</td>
                  <td><?php echo $json['latitude']; ?></td>
                </tr>
                <tr>
                  <td>Longitude:</td>
                  <td><?php echo $json['longitude']; ?></td>
                </tr>
                <tr>
                  <td>Location:</td>
                  <td><a href="https://maps.google.com/?q=<?php echo $json['latitude']; ?>,<?php echo $json['longitude']; ?>" target="_blank">https://maps.google.com/?q=<?php echo $json['latitude']; ?>,<?php echo $json['longitude']; ?></a></td>
                </tr>
                <tr>
                  <td>Organization:</td>
                  <td><?php echo $json['organization']; ?></td>
                </tr>
                <tr>
                  <td>Languages:</td>
                  <td><?php echo $json['languages']; ?></td>
                </tr>
                <tr>
                  <td>State Prov:</td>
                  <td><?php echo $json['state_prov']; ?></td>
                </tr>
                <tr>
                  <td>Current Time:</td>
                  <td><?php echo $json['time_zone'] ['current_time']; ?></td>
                </tr>
                <tr>
                  <td>Time Zone:</td>
                  <td><?php echo $json['time_zone'] ['name']; ?></td>
                </tr>
                <tr>
                  <td>Offset:</td>
                  <td><?php echo $json['time_zone'] ['offset']; ?></td>
                </tr>
                <tr>
                  <td>Current Time Unix:</td>
                  <td><?php echo $json['time_zone'] ['current_time_unix']; ?></td>
                </tr>
                <tr>
                  <td>DST Savings:</td>
                  <td><?php echo $json['time_zone'] ['dst_savings']; ?></td>
                </tr>
                <tr>
                  <td>IS DST:</td>
                  <td><?php echo $json['time_zone'] ['is_dst']; ?></td>
                </tr>
                <tr>
                  <td>ZIP Code:</td>
                  <td><?php echo $json['zipcode']; ?></td>
                </tr>
                <tr>
                  <td>Currency Code:</td>
                  <td><?php echo $json['currency'] ['code']; ?></td>
                </tr>
                <tr>
                  <td>Currency Name:</td>
                  <td><?php echo $json['currency'] ['name']; ?></td>
                </tr>
                <tr>
                  <td>Currency Symbol:</td>
                  <td><?php echo $json['currency'] ['symbol']; ?></td>
                </tr>
                <tr>
                  <td>-------------</td>
                  <td>-------------</td>
                </tr>
                <tr>
                  <td>-------------</td>
                  <td>-------------</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="contx col-md-4">
    <div class="yeah">
     <a href="https://instagram.com/0hacker_x0/" target="_blank" ><i class="fab fa-instagram"></i></a>
     <a href="https://facebook.com/hackerxmr/" target="_blank" ><i class="fab fa-facebook"></i></a>
     <a href="https://t.me/mrhackersx" target="_blank" ><i class="fab fa-telegram"></i></a>
     <a href="https://github.com/MrHacker-X/" target="_blank" ><i class="fab fa-github"></i></a>
     <a href="https://youtube.com/c/Sololex/" target="_blank" ><i class="fab fa-youtube"></i></a>
   </div>
  </div>

  <!-- Bootstrap Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
