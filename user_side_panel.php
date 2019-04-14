

<style>
.cus_row{
   padding: 10px !important;
}

.sidenav_panel {
    height: 100% !important;
    width: 200px !important;
    background-color: #f8f8f8 !important;
    overflow-x: hidden !important;
    padding-top: 20px !important;
}

.sidenav_panel a {
    padding: 6px 6px 6px 32px !important;
    text-decoration: none !important;
    font-size: 23px !important;
    color: #7f7c7c !important;
    display: block !important;
}

.sidenav_panel a:hover {
    color: #484747 !important;
}

.main_panel {
    margin-left: 200px !important;
    margin-top: -240px;
    /* Same as the width of the sidenav_panel */
}

@media screen and (max-height: 450px) {
  .sidenav_panel {padding-top: 15px;}
  .sidenav_panel a {font-size: 18px;}
}

</style>

<div class="sidenav_panel">
                <a href="user_dashboard.php">DashBoard</a>
                <a href="user_profile.php">Profile</a>
                <a href="">Points</a> 
                <a href="user_graph.php">graph</a>
            </div>