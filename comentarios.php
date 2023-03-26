<table class="table">
                                <tr>
                                    <?php
                                        $consulta="SELECT * FROM coment";
                                        $query=mysqli_query($conect,$consulta);
                                        $array=mysqli_fetch_array($query);
                                    ?>
                                    <?php
                                        foreach($query as $row){
                                        ?>
                                        <td>
                                            <center>
                                                <div class="media-body">
                                                    <h5><?php echo $row['nombre'];?><small>-<i><?php echo $row['fecha'];?></i></small></h5>
                                                    <h3 style="color:purple;"><?php echo $row['coment'];?></h3>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>