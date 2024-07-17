<?php
session_start();
// Function Connection
// Calling the database connection
include_once('connection.php');
$conn = connection();

$id = $_GET['delete'];
$sql = "DELETE FROM `captain_db` WHERE captain_id= $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo 'Delete Successfully';
            header('Location: admin_sidebar.php');
            exit;
        };


        $id1 = $_GET['delete1'];
$sql = "DELETE FROM `kgwd1-db` WHERE id= $id1";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo 'Delete Successfully';
            header('Location: admin_sidebar.php');
            exit;
        };


        $id2 = $_GET['delete2'];
        $sql = "DELETE FROM `kgwd2-db` WHERE id= $id2";
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo 'Delete Successfully';
                    header('Location: admin_sidebar.php');
                    exit;
                };

                $id3 = $_GET['delete3'];
                $sql = "DELETE FROM `kgwd3-db` WHERE id= $id3";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            echo 'Delete Successfully';
                            header('Location: admin_sidebar.php');
                            exit;
                        };

                        $id4 = $_GET['delete4'];
                $sql = "DELETE FROM `kgwd4-db` WHERE id= $id4";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            echo 'Delete Successfully';
                            header('Location: admin_sidebar.php');
                            exit;
                        };

                        
                        $id5 = $_GET['delete5'];
                $sql = "DELETE FROM `kgwd5-db` WHERE id= $id5";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            echo 'Delete Successfully';
                            header('Location: admin_sidebar.php');
                            exit;
                        };

                           
                        $id6 = $_GET['delete6'];
                $sql = "DELETE FROM `kgwd6-db` WHERE id= $id6";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            echo 'Delete Successfully';
                            header('Location: admin_sidebar.php');
                            exit;
                        };

                                 
                        $id7 = $_GET['delete7'];
                $sql = "DELETE FROM `kgwd7` WHERE id= $id7";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            echo 'Delete Successfully';
                            header('Location: admin_sidebar.php');
                            exit;
                        };

                                        
                        $id8 = $_GET['delete8'];
                $sql = "DELETE FROM `secretary-db` WHERE id= $id8";
                        $result = mysqli_query($conn, $sql);
                        if($result){
                            echo 'Delete Successfully';
                            header('Location: admin_sidebar.php');
                            exit;
                        };

                        $id9 = $_GET['delete9'];
                        $sql = "DELETE FROM `treasurer-db` WHERE id= $id9";
                                $result = mysqli_query($conn, $sql);
                                if($result){
                                    echo 'Delete Successfully';
                                    header('Location: admin_sidebar.php');
                                    exit;
                                };


                                $id10 = $_GET['delete10'];
                        $sql = "DELETE FROM `sk-chairman` WHERE id= $id10";
                                $result = mysqli_query($conn, $sql);
                                if($result){
                                    echo 'Delete Successfully';
                                    header('Location: admin_sidebar.php');
                                    exit;
                                };

                                $id11 = $_GET['delete11'];
                                $sql = "DELETE FROM `sk-kgwd-db` WHERE id= $id11";
                                        $result = mysqli_query($conn, $sql);
                                        if($result){
                                            echo 'Delete Successfully';
                                            header('Location: admin_sidebar.php');
                                            exit;
                                        };

                                        $id12 = $_GET['delete12'];
                                        $sql = "DELETE FROM `sk-kgwd2-db` WHERE id= $id12";
                                                $result = mysqli_query($conn, $sql);
                                                if($result){
                                                    echo 'Delete Successfully';
                                                    header('Location: admin_sidebar.php');
                                                    exit;
                                                };

                                                $id13 = $_GET['delete13'];
                                                $sql = "DELETE FROM `sk-kgwd3-db` WHERE id= $id13";
                                                        $result = mysqli_query($conn, $sql);
                                                        if($result){
                                                            echo 'Delete Successfully';
                                                            header('Location: admin_sidebar.php');
                                                            exit;
                                                        };
                    $id14 = $_GET['delete14'];
                    $sql = "DELETE FROM `sk-kgwd4-db` WHERE id= $id14";
                            $result = mysqli_query($conn, $sql);
                            if($result){
                                echo 'Delete Successfully';
                                header('Location: admin_sidebar.php');
                                exit;
                            };

                            $id15 = $_GET['delete15'];
                            $sql = "DELETE FROM `sk-kgwd5-db` WHERE id= $id15";
                                    $result = mysqli_query($conn, $sql);
                                    if($result){
                                        echo 'Delete Successfully';
                                        header('Location: admin_sidebar.php');
                                        exit;
                                    };

                                    $id16 = $_GET['delete16'];
                                    $sql = "DELETE FROM `sk-kgwd6-db` WHERE id= $id16";
                                            $result = mysqli_query($conn, $sql);
                                            if($result){
                                                echo 'Delete Successfully';
                                                header('Location: admin_sidebar.php');
                                                exit;
                                            };

                                            $id17 = $_GET['delete17'];
                                            $sql = "DELETE FROM `sk-kgwd7-db` WHERE id= $id17";
                                                    $result = mysqli_query($conn, $sql);
                                                    if($result){
                                                        echo 'Delete Successfully';
                                                        header('Location: admin_sidebar.php');
                                                        exit;
                                                    };
?>

