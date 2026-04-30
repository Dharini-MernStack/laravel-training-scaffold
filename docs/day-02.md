# Day 02 – Routing & Controllers

## What I Learned

- How Laravel maps URLs to PHP controller methods using `Route::resource()`.
- The difference between **full resource routes** and **shallow nested resource routes**.
- How route wildcards like `{project}` enable **Route Model Binding** — Laravel auto-fetches the model from the DB.
- Named routes (e.g., `projects.show`) let you generate URLs with `route('projects.show', $project)` instead of hardcoding strings.
- Express devs think in individual `app.get()`/`app.post()` calls; Laravel's resource routing declares all 7 CRUD verbs in one line — more powerful once you know the convention.

---

## Resources Watched

- **Ep 2 @ 00:08:40** — First Route & View (how routes connect to views)
- **Ep 6 @ 00:52:45** — Route Wildcards (route model binding, `{project}`)
- **Ep 19 @ 04:13:26** — Routes Reloaded (resource controllers, named routes)

---

## Route Table

All routes registered with `php artisan route:list` after Day 2 implementation:

### Projects (`Route::resource('projects', ProjectController::class)`)

| Method     | URL                        | Route Name           | Controller@Method             | Purpose                          |
|------------|----------------------------|----------------------|-------------------------------|----------------------------------|
| GET        | `/projects`                | `projects.index`     | `ProjectController@index`     | List all projects                |
| GET        | `/projects/create`         | `projects.create`    | `ProjectController@create`    | Show create-project form         |
| POST       | `/projects`                | `projects.store`     | `ProjectController@store`     | Save new project to DB           |
| GET        | `/projects/{project}`      | `projects.show`      | `ProjectController@show`      | Show a single project            |
| GET        | `/projects/{project}/edit` | `projects.edit`      | `ProjectController@edit`      | Show edit form for a project     |
| PUT/PATCH  | `/projects/{project}`      | `projects.update`    | `ProjectController@update`    | Update an existing project       |
| DELETE     | `/projects/{project}`      | `projects.destroy`   | `ProjectController@destroy`   | Delete a project                 |

### Tasks (`Route::resource('projects.tasks', TaskController::class)->shallow()`)

Shallow nesting keeps collection routes under `/projects/{project}/tasks` but moves member routes to `/tasks/{task}` — avoids redundant `{project}` in every deep URL.

| Method     | URL                                   | Route Name                | Controller@Method          | Purpose                               |
|------------|---------------------------------------|---------------------------|----------------------------|---------------------------------------|
| GET        | `/projects/{project}/tasks`           | `projects.tasks.index`    | `TaskController@index`     | List tasks for a project              |
| GET        | `/projects/{project}/tasks/create`    | `projects.tasks.create`   | `TaskController@create`    | Show create-task form for a project   |
| POST       | `/projects/{project}/tasks`           | `projects.tasks.store`    | `TaskController@store`     | Save new task under a project         |
| GET        | `/tasks/{task}`                       | `tasks.show`              | `TaskController@show`      | Show a single task                    |
| GET        | `/tasks/{task}/edit`                  | `tasks.edit`              | `TaskController@edit`      | Show edit form for a task             |
| PUT/PATCH  | `/tasks/{task}`                       | `tasks.update`            | `TaskController@update`    | Update an existing task               |
| DELETE     | `/tasks/{task}`                       | `tasks.destroy`           | `TaskController@destroy`   | Delete a task                         |

---

## Verification

Start the dev server (`php artisan serve`) and visit these URLs — each returns a plain-text stub message:

| URL                           | Expected Response                                          |
|-------------------------------|------------------------------------------------------------|
| `/projects`                   | `ProjectController@index — list all projects (stub)`       |
| `/projects/create`            | `ProjectController@create — show create project form (stub)` |
| `/projects/1`                 | `ProjectController@show — show project 1 (stub)`           |
| `/projects/1/edit`            | `ProjectController@edit — edit form for project 1 (stub)`  |
| `/projects/1/tasks`           | `TaskController@index — list tasks for project 1 (stub)`   |
| `/projects/1/tasks/create`    | `TaskController@create — create task form for project 1 (stub)` |
| `/tasks/1`                    | `TaskController@show — show task 1 (stub)`                 |
| `/tasks/1/edit`               | `TaskController@edit — edit form for task 1 (stub)`        |

> **Note:** `/projects/1` will 404 if no project with ID 1 exists in the DB (Route Model Binding will fail). Seed or create a project first, or temporarily swap `Project $project` with `$project` + manual lookup to test without DB data.

---

## Key Concepts

### Route Model Binding
When a route parameter name matches a model (e.g., `{project}` → `Project`), Laravel automatically queries `SELECT * FROM projects WHERE id = ?` and injects the model — or returns a 404 if not found. No manual `Project::findOrFail($id)` needed.

### Shallow Nesting
`->shallow()` means:
- **Collection routes** (index, create, store) stay nested: `/projects/{project}/tasks`
- **Member routes** (show, edit, update, destroy) become top-level: `/tasks/{task}`

This is the Laravel-recommended pattern for nested resources.

### Named Routes
Every resource route gets an auto-generated name. Use them in code:
```php
route('projects.show', $project)      // → /projects/42
route('projects.tasks.index', $project) // → /projects/42/tasks
```

---

## Files Changed

| File | Change |
|------|--------|
| `routes/web.php` | Added `Route::resource('projects', ...)` and `Route::resource('projects.tasks', ...)->shallow()` |
| `app/Http/Controllers/ProjectController.php` | Replaced all `abort(501)` with stub `return` strings |
| `app/Http/Controllers/TaskController.php` | Replaced all `abort(501)` with stub `return` strings |
| `docs/day-02.md` | This file — route table, verification steps, key concepts |

---

## Next Steps (Day 3+)

- **Day 5**: Replace stub strings with real Blade views and Eloquent queries.
- **Day 6**: Add eager loading to fix N+1 query problems.
- **Day 7**: Extract validation into Form Request classes.
- **Day 8**: Wrap routes in `auth` middleware after installing Laravel Breeze.
