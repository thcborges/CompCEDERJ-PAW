<?php


function diasDoAno($ano) {
    if ($ano % 400 === 0)
        return 366;
    elseif ($ano % 100 == 0)
        return 365;
    elseif ($ano % 4 == 0)
        return 366;
    else
        return 365;
}


echo diasDoAno(2000) . " - 2000\n";
echo diasDoAno(1900) . " - 1900\n";
echo diasDoAno(1996) . " - 1996\n";
echo diasDoAno(2004) . " - 2004\n";
echo diasDoAno(2008) . " - 2008\n";
echo diasDoAno(2006) . " - 2006\n";
