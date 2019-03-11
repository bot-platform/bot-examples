Bot Platform API overview
=========================

## Contents
- [Common rules](#common-rules)
- [Events](#events)
  - [New game](#event-new_game)
  - [Your hit](#event-your_hit)
  - [Hit result](#event-hit-result)
  - [Game finished](#event-game_finished)
  - [Ping](#event-ping)

### Commom rules:
* Bot should be compatible with one endpoint.
* If Platform received invalid response from bot it ends game with defeat for this bot.

## Events

| Name                                    | Description                                         |
|-----------------------------------------|-----------------------------------------------------|
| [new_game](#event-new_game)             | Triggered when BP creates new game with this bot.   |
| [your_hit](#event-your_hit)             | Triggered when BP switched the move to this bot.    |
| [hit_result](#event-hit_result)         | Triggered when BP processes last hit of this bot.   |
| [game_finished](#event-game_finished)   | Triggered when BP finishes the game.                |
| [ping](#event-ping)                     | Triggered when BP checks bot's server availability. |

#### Event request example:
```json
POST {"event": "new_game", "payload": {"id": "5c74eba44651f70001d12d31", "test": true}} http://bot-address/hook
```

### Event `new_game`:

#### Payload:
| Key  | Type    | Description                                           |
|------|---------|-------------------------------------------------------|
| id   | string  | Unique identificator of created game.                 |
| test | boolean | Indicates that game was created for testing purposes. |

#### Example:
```json
{
    "id": "5c74eba44651f70001d12d31",
    "test": true
}
```

#### Reply:
| Key  | Type    | Description                                           |
|------|---------|-------------------------------------------------------|
| -    | array   | Generated board for this game.                        |

#### Example:
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

### Event `your_hit`:
// TODO

### Event `hit_result`:
// TODO

### Event `game_finished`:
// TODO

### Event `ping`:
// TODO
