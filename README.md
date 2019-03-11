Bot Platform API overview
=========================

## Contents
- [Common rules](#common-rules)
- [Events](#events)
  - [New game](#event-new_game)
  - [Next turn](#event-next_turn)
  - [Turn result](#event-turn-result)
  - [Game finished](#event-game_finished)
  - [Ping](#event-ping)
- [Event request example](#event-request-example)

### Commom rules:
* Bot should be compatible with one endpoint.
* If Platform received invalid response from bot it ends game with defeat for this bot.

### Events

| Name                                    | Description                                         |
|-----------------------------------------|-----------------------------------------------------|
| [new_game](#event-new_game)             | Triggered when BP creates new game with this bot.   |
| [next_turn](#event-next_turn)             | Triggered when BP switched the move to this bot.    |
| [turn_result](#event-turn_result)         | Triggered when BP processes last turn of this bot.   |
| [game_finished](#event-game_finished)   | Triggered when BP finishes the game.                |
| [ping](#event-ping)                     | Triggered when BP checks bot's server availability. |

#### Event `new_game`:

##### Payload:
| Key  | Type    | Description                                           |
|------|---------|-------------------------------------------------------|
| id   | string  | Unique identificator of created game.                 |
| test | boolean | Indicates that game was created for testing purposes. |

##### Example:
```json
{
    "id": "5c74eba44651f70001d12d31",
    "test": true
}
```

##### Reply:
| Key  | Type    | Description                                           |
|------|---------|-------------------------------------------------------|
| -    | array   | Generated board for this game.                        |

##### Example:
```json
[
    [0, 0, 0, 0, 1, 0, 1, 0, 0, 0],
    [0, 1, 0, 0, 0, 0, 1, 0, 0, 0],
    [0, 1, 0, 0, 1, 0, 0, 0, 1, 0],
    [0, 1, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 1, 0, 0, 1, 1, 1, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 1, 0],
    [0, 0, 0, 1, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 1, 0, 0, 1, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 1, 0, 0, 0],
    [0, 1, 1, 0, 0, 0, 1, 0, 0, 0]
]
```

#### Event `next_turn`:
// TODO

#### Event `turn_result`:
// TODO

#### Event `game_finished`:
// TODO

#### Event `ping`:
// TODO

### Event request example:
```json
URL: http://bot-address/hook
Method: POST
Body:
{
    "event":"new_game",
    "payload":{
        "id":"5c74eba44651f70001d12d31",
        "test":true
    }
}
```
