                    <h1 style="margin-left: 3%">Java Question Bank</h1>
                    <ul class="list-group">
                        <?php while($row = $result->fetch_assoc()){ ?>
                            <li class="list-group-item <?php if($id==$row['id']) echo 'active'; ?>">    
                                <a style="color:<?php if($id==$row['id']) echo 'red'; else echo 'black' ?>;" 
                                href="javaquestionbank.php?id=<?php echo $row['id'];?>">
                                <?php echo $row['title']; ?></a>
                            </li>   
                        <?php } ?>
                        <!-- disabled class is for styling and doesn't mean anything else -->
                        <!-- <li class="list-group-item">  
                            <a class="disabled" style="color:<?php if($value=='advancevscore') echo 'black'; ?>;" 
                            href="#">Area</a>
                        </li>
                        <li class="list-group-item <?php if($value=='javaeditor') echo 
                        'disabled'; ?>">  
                            <a style="color:<?php if($value=='javaeditor') echo 'black'; ?>;" 
                            href="#">Average</a>
                        </li>
                        <li class="list-group-item <?php if($value=='helloworld') echo 'disabled'; ?>">  
                            <a style="color:<?php if($value=='helloworld') echo 'black'; ?>;" 
                            href="#">Bankar's Discount</a>
                        </li>
                        <li class="list-group-item <?php if($value=='jdkinstall') echo 'disabled'; ?>">  
                            <a style="color:<?php if($value=='jdkinstall') echo 'black'; ?>;" 
                            href="#">Ratio & Proportion</a>
                        </li>
                        <li class="list-group-item <?php if($value=='javaeditor') echo 'disabled'; ?>">  
                            <a style="color:<?php if($value=='javaeditor') echo 'black'; ?>;" 
                            href="#">Permutation & Combination</a>
                        </li>
                        <li class="list-group-item <?php if($value=='helloworld') echo 'disabled'; ?>">  
                            <a style="color:<?php if($value=='helloworld') echo 'black'; ?>;" 
                            href="#">Profit & Loss</a>
                        </li>
                        <li class="list-group-item <?php if($value=='jdkinstall') echo 'disabled'; ?>">  
                            <a style="color:<?php if($value=='jdkinstall') echo 'black'; ?>;" 
                            href="#">Time & Distance</a>
                        </li>
                        <li class="list-group-item <?php if($value=='javaeditor') echo 'disabled'; ?>">  
                            <a style="color:<?php if($value=='javaeditor') echo 'black'; ?>;" 
                            href="#">Problem on Age</a>
                        </li>
                        <li class="list-group-item <?php if($value=='helloworld') echo 'disabled'; ?>">  
                            <a style="color:<?php if($value=='helloworld') echo 'black'; ?>;" 
                            href="#">Percentage</a>
                        </li>
                        <li class="list-group-item <?php if($value=='jdkinstall') echo 'disabled'; ?>">  
                            <a style="color:<?php if($value=='jdkinstall') echo 'black'; ?>;" 
                            href="#">Simple Interest</a>
                        </li> -->
                    </ul>