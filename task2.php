<?php

const ALL_PICS = 80;
const FELT_TIP_PAN_PICS = 23;
const PENCILS_PICS = 40;

echo "На школьной выставке " . ALL_PICS . " рисунков. " . FELT_TIP_PAN_PICS . " из них выполнены фломастерами, " . PENCILS_PICS . " карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?" . "<br>";

$PAINT_PICS = ALL_PICS - FELT_TIP_PAN_PICS - PENCILS_PICS;
echo "Ответ: $PAINT_PICS";
