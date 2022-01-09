<?php

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "praktikum_9");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
};

function tambah($data)
{
    global $conn;
    //ambil data dari tiap elemen dalam form
    $name = htmlspecialchars($data["name"]);
    $email = htmlspecialchars($data["email"]);
    $address = htmlspecialchars($data["address"]);
    $gender = htmlspecialchars($data["gender"]);
    $position = htmlspecialchars($data["position"]);
    $status = htmlspecialchars($data["status"]);

    //query insert data
    $query = "INSERT INTO karyawan VALUES
                ('', '$name', '$email', '$address', '$gender', '$position', '$status')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");
    return mysqli_affected_rows($conn);
}

