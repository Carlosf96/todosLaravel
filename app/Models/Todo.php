<?php

namespace App\Models;

/**
 * A class to model a Todo entity which consist of:
 * 
 * @category Entity
 * 
 * @author francocarlos96 <carlos.f.roque96@gmail.com>
 * 
 * @property id as int
 * 
 * @property title as string
 * 
 * @property description as string
 */
class Todo
{
    /**
     * A function to find all todos
     * 
     * @return type is a Todos array
     */
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Clean room',
                'description' => 'make bed, sweep room, mop room',
            ],
            [
                'id' => 2,
                'title' => 'Clean living room',
                'description' => 'sweep living room, mop living room',
            ]
        ];
    }
    /**
     * A function to find one todo
     * 
     * @param int $id The unique identifier for a user to retrieve data for one todo.
     * 
     * @return type is a Todo
     */
    public static function findOne($id)
    {
        $todos = self::all();

        foreach ($todos as $todo) {
            if ($todo['id'] == $id) {
                return $todo;
            }
        }
    }
}

