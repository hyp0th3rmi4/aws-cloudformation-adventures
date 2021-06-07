<?php
    $metadata_url = "http://169.254.169.254/latest/meta-data";
    $ami_id = file_get_contents("$metadata_url/ami-id");
    $instance_id = file_get_contents("$metadata_url/instance-id");
    $instance_type = file_get_contents("$metadata_url/instance-type");
    $instance_action = file_get_contents("$metadata_url/instance-action");
    $hostname = file_get_contents("$metadata_url/hostname");
    $local_hostname = file_get_contents("$metadata_url/local-hostname");
    $public_hostname = file_get_contents("$metadata_url/public-hostname");
    $local_ipv4 = file_get_contents("$metadata_url/local-ipv4");
    $public_ipv4 = file_get_contents("$metadata_url/public-ipv4");
    $reservation_id = file_get_contents("$metadata_url/reservation-id");
    $profile = file_get_contents("$metadata_url/profile");
    $security_groups = file_get_contents("$metadata_url/security-groups");
    $mac = file_get_contents("$metadata_url/mac");

?>
<html>
<head>
    <title>EC2 Instance Details</title>
</head>
<body>
    <table>
    <thead>
        <tr><th>Attribute</th><th>Value</th></tr>
    </thead>
    <tbody>
        <tr><td>AMI Id</td><td><?= $ami_id ?></td></tr>
        <tr><td>Instance Id</td><td><?= $instance_id ?></td></tr>
        <tr><td>Instance Type</td><td><?= $instance_type ?></td></tr>
        <tr><td>Instance Action</td><td><?= $instance_action ?></td></tr>
        <tr><td>Host Name</td><td><?= $hostname ?></td></tr>
        <tr><td>Public Host Name</td><td><?= $public_hostname ?></td></tr>
        <tr><td>Local Host Name</td><td><?= $local_hostname ?></td></tr>
        <tr><td>Public IPv4</td><td><?= $local_hostname ?></td></tr>
        <tr><td>Local IPv4</td><td><?= $local_hostname ?></td></tr>
        <tr><td>Reservation Id</td><td><?= $local_hostname ?></td></tr>
        <tr><td>Profile</td><td><?= $local_hostname ?></td></tr>
        <tr><td>Security Groups</td><td><?= $local_hostname ?></td></tr>
        <tr><td>MAC</td><td><?= $local_hostname ?></td></tr>
    </tbody>
    </table>
</body>
</html>