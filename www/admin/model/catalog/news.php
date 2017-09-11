<?php

class ModelCatalogNews extends Model {

    public function getList($data){
        $news = R::findAll('testnews');
        $news = R::beansToArray($news);
        return [
            ['id' => 1,'content' => "lorem sdsdf dfsdf df "],
            ['id' => 2,'content' => "2 lorem sdsdf dfsdf df "],
        ];
    }

    public function add(){
        $news = R::dispense( 'testnews' );
        $news->text = 'Lorem 1212121212';
        $id = R::store( $news );
    }



}