<?php  // exception8.php
declare(strict_types=1);

class HogeException extends RuntimeException {
}

try {
    throw new Exception('run error');
// } catch (Throwable $e) { // これやると全部ここに吸い込まれる
    // echo "Throwable <br>";
} catch (RuntimeException $e) {
    echo "RuntimeException <br>";
} catch (Exception $e) {
    echo "Exception <br>";
} catch (Error $e) {
    echo "Error <br>";
} catch (Throwable $e) {
    echo "Throwable <br>";
}
