<form method="post" action="index.php">

                    <table>
                        <tr>
                            <th>
                                <label for="<?php echo $name; ?>"><?php echo $name; ?></label>
                            </th>
                            <td>
                                <input type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email" required>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="<?php echo $password; ?>"><?php echo $password; ?></label>
                            </th>
                            <td>
                                <<?php echo $tag; ?> type="<?php echo $type;?>" name="<?php echo $password; ?>" id="<?php echo $password; ?>" required></<?php echo $tag;?>>
                            </td>
                        </tr> 
                        <tr style="display: none;">
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="address" id="address">
                                <p>Humans (and frogs): please leave this field blank.</p>
                            </td>
                        </tr>                   
                    </table>
                    <input type="submit" value="Send">

                </form>