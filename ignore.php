<!-- uses php to get recipies from database instead of AJAX -->


<tbody>
    <?php
    // select all tasks if page is visited or refreshed
    $recipie = mysqli_query($conn, "SELECT * FROM recipietable2");

    $i = 1;
    while ($row = mysqli_fetch_array($recipie)) { ?>
        <div class="border">
            <tr>
                <td class="recipies"><b><?php echo $row['name']; ?></b></td><br />
                <td class="description"><i><?php echo $row['description']; ?></i></td><br /><br />
                <td class="ingredients"><?php echo $row['ingredients']; ?></td><br /><br />
                <td class="directions"><?php echo $row['directions']; ?></td><br />
            </tr>
        </div>
    <?php $i++;
    } ?>
</tbody>