<?php
function launchSimpleRequest(string $sql, array $params, PDO $db): array
{
    $stmt = $db->prepare($sql);
    foreach ($params as $id=>$param) {
        $stmt->bindValue($id, $param[0], $param[1]);
    }
    $stmt->execute();
    $result = $stmt->fetchAll();
    unset($stmt);
    return $result;
}