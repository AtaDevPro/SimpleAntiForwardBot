<?php
// antiforward bot

$input = file_get_contents("php://input");
$update = json_decode($input, true);


define("API_TOKEN", "");

function bot(string $methods, array $params)
{
  $ch = curl_init();
  curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.telegram.org/bot" . API_TOKEN . "/$methods",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $params,
  ]);
  $data = curl_exec($ch);
  curl_close($ch);
  return json_decode($data, true);
};

function copyMessage(int|string $chat_id, int|string $from_chat_id, int $message_id, int $message_thread_id = null, string $caption = null, string $parse_mode = null, mixed $caption_entities = null, bool $disable_notification = null, bool $protect_content = null, mixed $reply_parameters = null, mixed $reply_markup = null)
{
  $params = [
    'chat_id' => $chat_id,
    'from_chat_id' => $from_chat_id,
    'message_id' => $message_id
  ];

  if ($message_thread_id !== null) {
    $params['message_thread_id'] = $message_thread_id;
  }
  if ($caption !== null) {
    $params['caption'] = $caption;
  }
  if ($parse_mode !== null) {
    $params['parse_mode'] = $parse_mode;
  }
  if ($caption_entities !== null) {
    $params['caption_entities'] = $caption_entities;
  }
  if ($disable_notification !== null) {
    $params['disable_notification'] = $disable_notification;
  }
  if ($protect_content !== null) {
    $params['protect_content'] = $protect_content;
  }
  if ($reply_parameters !== null) {
    $params['reply_parameters'] = $reply_parameters;
  }
  if ($reply_markup !== null) {
    $params['reply_markup'] = $reply_markup;
  }

  return bot('copyMessage', $params);
};


$chat_id = $update['message']['chat']['id'];
$from_chat_id = $update['message']['from']['id'];
$message_id = $update['message']['message_id'];

if ($input) {
  copyMessage(chat_id: $chat_id, from_chat_id: $from_chat_id, message_id: $message_id);
};

// Github.com/AtaDevPro