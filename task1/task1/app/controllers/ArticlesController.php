<?php
class ArticlesController extends BaseController
{
	public function showArticles()
	{
		return View::make('articles');
	}
	public function showOneArticle($id)
	{
		return "Article $id";
	}
}