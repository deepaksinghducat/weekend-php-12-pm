<?php 

// enum Status {
//     case PENDING;
//     case ANSWERED;
// }

// print_r(Status::PENDING);

// enum Status {
//     const PENDING = 10;
//     const ANSWERED = 1;
// }

// print_r(Status::ANSWERED);

// how to use interface in enum

// interface StatusInterface {
//     public static function getStatus();
// }

// enum Status implements StatusInterface {
//     const SUCCESS = 10;

//     public static function getStatus()
//     {
//         return Status::SUCCESS;
//     }
// }

// echo Status::getStatus();

// how to use trait in enum

trait StatusTrait {
    public static function getStatus()
    {
        return self::SUCCESS;
    }
}

enum Status {
    const SUCCESS = 10;

    use StatusTrait;
}

echo Status::getStatus();