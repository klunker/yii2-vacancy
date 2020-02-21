<?php

/*
 * Copyright (C) 2020 Andrii.Cherepkov@gmail.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace klunker\vacancy;

/**
 * Description of Model
 *
 * @author webde
 */
class Model extends \yii\db\ActiveRecord {

    /**
     * Finds ActiveRecord instance(s) by the given condition.
     * And return array prepared for Pagination
     * @param mixed $condition please refer to [[findOne()]] for the explanation of this parameter
     * @return array [Integer the number of elements, ActiveQueryInterface the newly created [[ActiveQueryInterface|ActiveQuery]] instance].
     */
    public static function preparePagination($condition = null): array{
        
        $query = is_null($condition)? static::find() : $this->findByCondition($condition);
        $return[] = $query->count();
        $return[] = $query;
        return $return;
    }
    
}
