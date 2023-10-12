<?php

function confirm_query($result_set)
{
    global $conn;
    if (!$result_set) {
        die("Query failed: " . $conn->error);
    }
}


function get_all_subjects()
{
    global $conn;

    // Retrieve data
    $query = "SELECT * 
    FROM subjects 
    ORDER BY position ASC";
    $subject_set = $conn->query($query);

    // Check for errors
    confirm_query($subject_set);
    return $subject_set;
}

function get_pages_for_subject($id)
{
    global $conn;

    $query = "SELECT * 
    FROM pages 
    WHERE subject_id = {$id} 
    ORDER BY position ASC";
    $page_set = $conn->query($query);

    confirm_query($page_set);
    return $page_set;
}
