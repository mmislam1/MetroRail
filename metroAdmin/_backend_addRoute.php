<?php

include("database_connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {


    $name = mysqli_real_escape_string($db,$_POST['name']);
    $station1 = mysqli_real_escape_string($db,$_POST['station1']);
    $length1 = mysqli_real_escape_string($db,$_POST['length1']);
    $station2 = mysqli_real_escape_string($db,$_POST['station2']);
    $length2 = mysqli_real_escape_string($db,$_POST['length2']);
    $station3 = mysqli_real_escape_string($db,$_POST['station3']);
    $length3 = mysqli_real_escape_string($db,$_POST['length3']);
    
 
   
 
    
    
      
    if(isset($_SESSION['admin_type'])) {
        $sql = "SELECT route_id from `routes` where route_name='$name'";
        $result=mysqli_query($db,$sql);

        $row=mysqli_fetch_assoc($result);
        

        if ($row==0){
            $sql = "INSERT into `routes`(route_name) values ('$name')";
        
              mysqli_query($db,$sql);

              


            
        }
        $sql = "SELECT route_id,total_stations from `routes` where route_name='$name'";
        
        $result=mysqli_query($db,$sql);

        $row=mysqli_fetch_assoc($result);

        $id=$row['route_id'];
        
        

        $total=$row['total_stations'];

        $sql = "SELECT MAX(station_order_number) from `routedetails` where route_id=$id";
        
        $result=mysqli_query($db,$sql);

        $max=mysqli_fetch_assoc($result);

        $order=$max['MAX(station_order_number)'];

        if($station1!='empty'){

            $total=$total+1;

            $sql="SELECT stations_id FROM `stations` where station_name ='$station1'";
            
        $result = mysqli_query($db,$sql);

        $st = mysqli_fetch_assoc($result);

        $sta=$st['stations_id'];

        $order=$order+1;

            $sql = "INSERT INTO `routedetails`(route_id,station_id,station_order_number,length_from_start) values ($id,$sta,$order,$length1)";
        
        mysqli_query($db,$sql);

        $sql = "UPDATE `routes` set total_stations=$total where route_id=$id";
        
        mysqli_query($db,$sql);
    
    }


    if($station2!='empty'){

        $total=$total+1;
            
        $sql="SELECT stations_id FROM `stations` where station_name ='$station2'";
        
    $result = mysqli_query($db,$sql);

    $st = mysqli_fetch_assoc($result);

    $order=$order+1;

    $sta=$st['stations_id'];

    $sql = "INSERT INTO `routedetails`(route_id,station_id,station_order_number,length_from_start) values ($id,$sta,$order,$length2)";
    
    mysqli_query($db,$sql);

    $sql = "UPDATE `routes` set total_stations=$total where route_id=$id";
        
    mysqli_query($db,$sql);

}

    if($station3!='empty'){

        $total=$total+1;
                
        $sql="SELECT stations_id FROM `stations` where station_name ='$station3'";
        
    $result = mysqli_query($db,$sql);

    $st = mysqli_fetch_assoc($result);

    $order=$order+1;

    $sta=$st['stations_id'];



    $sql = "INSERT INTO `routedetails`(route_id,station_id,station_order_number,length_from_start) values ($id,$sta,$order,$length3)";
    mysqli_query($db,$sql);
    echo $id.":".$sta.":".$order.":".$length1;
    $sql = "UPDATE `routes` set total_stations=$total where route_id=$id";
            
            mysqli_query($db,$sql);

    }

            
           header("location: http://localhost/metroRailway/admin/metroAdmin/routeList.php");
           
        }else {
           echo "Only admin can add new route.";
        }

    }

    ?>