                  $user = explode('|', $data);
                    echo '
                            <tr>
                                <td>' . trim($user[0]) . '</td>
                                <td>' . trim($user[2]) . '</td>
                                <td>' . trim($user[3]) . '</td>
                            </tr>
                    ';
                }
            }
            echo '
                            <tr>
                                <td colspan="3"><a href="home.php">Go Home</a></td>
                            </tr>
                        </table>
                    </body>
                </html>
                ';
        } else {
            echo 'You do not have permission to visit this page  ';
            echo '<a href="home.php">Go Home</a>';
        }
    } else {
        header('location: login.php');
    }
} else {
    header('location: login.php');
}