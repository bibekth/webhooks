<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'github/'], function() {
    Route::post('webhooks', function () {
        try {
            $secret = "monkey@21";
            $payload = file_get_contents("php://input");
            // file_put_contents("webhook_request.log", $payload, FILE_APPEND);
            $signature = $_SERVER["HTTP_X_HUB_SIGNATURE_256"] ?? "";
            $hash = "sha256=" . hash_hmac("sha256", $payload, $secret);
            if (!hash_equals($hash, $signature)) {
                http_response_code(403);
                exit("Invalid Signature");
            }

            $data = json_decode($payload, true);
            if ($data["ref"] === "refs/heads/main") {
                exec("cd ~/public_html/webhooks && git pull origin main 2>&1", $output, $returnCode);
                file_put_contents("webhook.log", implode('\n', $output), FILE_APPEND);
            }
            return response()->json('success', 200);
        } catch (Throwable $e) {
            return response()->json($e->getMessage(), 500);
        }
    });
        Route::post('bibek/portfolio', function () {
        try {
            $secret = "monkey@21";
            $payload = file_get_contents("php://input");
            // file_put_contents("webhook_request.log", $payload, FILE_APPEND);
            $signature = $_SERVER["HTTP_X_HUB_SIGNATURE_256"] ?? "";
            $hash = "sha256=" . hash_hmac("sha256", $payload, $secret);
            if (!hash_equals($hash, $signature)) {
                http_response_code(403);
                exit("Invalid Signature");
            }

            $data = json_decode($payload, true);
            if ($data["ref"] === "refs/heads/main") {
                exec("cd ~/public_html/bibek_portfolio && git pull origin main 2>&1", $output, $returnCode);
                file_put_contents("webhook.log", implode('\n', $output), FILE_APPEND);
            }
            return response()->json('success', 200);
        } catch (Throwable $e) {
            return response()->json($e->getMessage(), 500);
        }
    });
    Route::post('chatapp', function () {
        try {
            $secret = "monkey@21";
            $payload = file_get_contents("php://input");
            // file_put_contents("webhook_request.log", $payload, FILE_APPEND);
            $signature = $_SERVER["HTTP_X_HUB_SIGNATURE_256"] ?? "";
            $hash = "sha256=" . hash_hmac("sha256", $payload, $secret);
            if (!hash_equals($hash, $signature)) {
                http_response_code(403);
                exit("Invalid Signature");
            }

            $data = json_decode($payload, true);
            if ($data["ref"] === "refs/heads/main") {
                exec("cd ~/public_html/chatapp && git pull origin main 2>&1", $output, $returnCode);
                file_put_contents("webhook.log", implode('\n', $output), FILE_APPEND);
            }
            return response()->json('success', 200);
        } catch (Throwable $e) {
            return response()->json($e->getMessage(), 500);
        }
    });
    Route::post('foodweb', function () {
        try {
            $secret = "monkey@21";
            $payload = file_get_contents("php://input");
            // file_put_contents("webhook_request.log", $payload, FILE_APPEND);
            $signature = $_SERVER["HTTP_X_HUB_SIGNATURE_256"] ?? "";
            $hash = "sha256=" . hash_hmac("sha256", $payload, $secret);
            if (!hash_equals($hash, $signature)) {
                http_response_code(403);
                exit("Invalid Signature");
            }

            $data = json_decode($payload, true);
            if ($data["ref"] === "refs/heads/development") {
                exec("cd ~/public_html/foodweb && git pull origin development 2>&1", $output, $returnCode);
                file_put_contents("webhook.log", implode('\n', $output), FILE_APPEND);
            }
            return response()->json('success', 200);
        } catch (Throwable $e) {
            return response()->json($e->getMessage(), 500);
        }
    });
    Route::post('grocery', function () {
        try {
            $secret = "monkey@21";
            $payload = file_get_contents("php://input");
            // file_put_contents("webhook_request.log", $payload, FILE_APPEND);
            $signature = $_SERVER["HTTP_X_HUB_SIGNATURE_256"] ?? "";
            $hash = "sha256=" . hash_hmac("sha256", $payload, $secret);
            if (!hash_equals($hash, $signature)) {
                http_response_code(403);
                exit("Invalid Signature");
            }

            $data = json_decode($payload, true);
            if ($data["ref"] === "refs/heads/main") {
                exec("cd ~/public_html/grocery && git pull origin main 2>&1", $output, $returnCode);
                file_put_contents("webhook.log", implode('\n', $output), FILE_APPEND);
            }
            return response()->json('success', 200);
        } catch (Throwable $e) {
            return response()->json($e->getMessage(), 500);
        }
    });
});
