<?php

namespace Netelip\UserBundle\Services;


class TaskService {

    public function createPagination($tasks, $request, $paginator, $nPages = 3){
        $pagination = $paginator->paginate(
            $tasks,
            $request->query->getInt('page', 1),
            $nPages
        );

        return $pagination;
    }


}