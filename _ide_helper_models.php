<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Book
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 */
	class Book extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Departamento
 *
 * @property string|null $categoria
 * @property float|null $centroide_lat
 * @property float|null $centroide_lon
 * @property string|null $fuente
 * @property int $id
 * @property string|null $nombre
 * @property string|null $nombre_completo
 * @property int $provincia_id
 * @property float|null $provincia_interseccion
 * @property string|null $provincia_nombre
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Localidad[] $localidades
 * @property-read int|null $localidades_count
 * @property-read \App\Models\Provincia $provincia
 * @method static \Illuminate\Database\Eloquent\Builder|Departamento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departamento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departamento query()
 */
	class Departamento extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\File
 *
 * @property int $id
 * @property string $title
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|File newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|File query()
 */
	class File extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Image
 *
 * @property int $id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Image query()
 */
	class Image extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Localidad
 *
 * @property string|null $categoria
 * @property float|null $centroide_lat
 * @property float|null $centroide_lon
 * @property string|null $departamento_id
 * @property string|null $departamento_nombre
 * @property string|null $fuente
 * @property int|null $id
 * @property int|null $localidad_censal_id
 * @property string|null $localidad_censal_nombre
 * @property string|null $municipio_id
 * @property string|null $municipio_nombre
 * @property string|null $nombre
 * @property int|null $provincia_id
 * @property string|null $provincia_nombre
 * @property-read \App\Models\Departamento|null $departamento
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Localidad query()
 */
	class Localidad extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Provincia
 *
 * @property string|null $categoria
 * @property float|null $centroide_lat
 * @property float|null $centroide_lon
 * @property string|null $fuente
 * @property int $id
 * @property string|null $iso_id
 * @property string|null $iso_nombre
 * @property string|null $nombre
 * @property string|null $nombre_completo
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Departamento[] $departamentos
 * @property-read int|null $departamentos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provincia query()
 */
	class Provincia extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
	class User extends \Eloquent {}
}

