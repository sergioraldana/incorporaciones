<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Alta Verapaz
    DB::table('municipio')->insert(['nombre' => 'Chahal', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Chisec', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Cobán', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Fray Bartolomé de las Casas', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'La Tinta', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Lanquín', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Panzós', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Raxruhá', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'San Cristóbal Verapaz', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'San Juan Chamelco', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'San Pedro Carchá', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Santa Cruz Verapaz', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Santa María Cahabón', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Senahú', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Tamahú', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Tactic', 'departamento_id' => 1]);
    DB::table('municipio')->insert(['nombre' => 'Tucurú', 'departamento_id' => 1]);

      // Baja Verapaz
    DB::table('municipio')->insert(['nombre' => 'Cubulco', 'departamento_id' => 2]);
    DB::table('municipio')->insert(['nombre' => 'Granados', 'departamento_id' => 2]);
    DB::table('municipio')->insert(['nombre' => 'Purulhá', 'departamento_id' => 2]);
    DB::table('municipio')->insert(['nombre' => 'Rabinal', 'departamento_id' => 2]);
    DB::table('municipio')->insert(['nombre' => 'Salamá', 'departamento_id' => 2]);
    DB::table('municipio')->insert(['nombre' => 'San Jerónimo', 'departamento_id' => 2]);
    DB::table('municipio')->insert(['nombre' => 'San Miguel Chicaj', 'departamento_id' => 2]);
    DB::table('municipio')->insert(['nombre' => 'Santa Cruz el Chol', 'departamento_id' => 2]);

      // Chimaltenango
    DB::table('municipio')->insert(['nombre' => 'Acatenango', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'Chimaltenango', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'El Tejar', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'Parramos', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'Patzicía', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'Patzún', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'Pochuta', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'San Andrés Itzapa', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'San José Poaquíl', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'San Juan Comalapa', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'San Martín Jilotepeque', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'Santa Apolonia', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'Santa Cruz Balanyá', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'Tecpán', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'Yepocapa', 'departamento_id' => 3]);
    DB::table('municipio')->insert(['nombre' => 'Zaragoza', 'departamento_id' => 3]);

      // Chiquimula
      DB::table('municipio')->insert(['nombre' => 'Camotán', 'departamento_id' => 4]);
    DB::table('municipio')->insert(['nombre' => 'Chiquimula', 'departamento_id' => 4]);
    DB::table('municipio')->insert(['nombre' => 'Concepción Las Minas', 'departamento_id' => 4]);
    DB::table('municipio')->insert(['nombre' => 'Esquipulas', 'departamento_id' => 4]);
    DB::table('municipio')->insert(['nombre' => 'Ipala', 'departamento_id' => 4]);
    DB::table('municipio')->insert(['nombre' => 'Jocotán', 'departamento_id' => 4]);
    DB::table('municipio')->insert(['nombre' => 'Olopa', 'departamento_id' => 4]);
    DB::table('municipio')->insert(['nombre' => 'Quezaltepeque', 'departamento_id' => 4]);
    DB::table('municipio')->insert(['nombre' => 'San Jacinto', 'departamento_id' => 4]);
    DB::table('municipio')->insert(['nombre' => 'San José la Arada', 'departamento_id' => 4]);
    DB::table('municipio')->insert(['nombre' => 'San Juan Ermita', 'departamento_id' => 4]);

      // El Progreso
    DB::table('municipio')->insert(['nombre' => 'El Jícaro', 'departamento_id' => 5]);
    DB::table('municipio')->insert(['nombre' => 'Guastatoya', 'departamento_id' => 5]);
    DB::table('municipio')->insert(['nombre' => 'Morazán', 'departamento_id' => 5]);
    DB::table('municipio')->insert(['nombre' => 'San Agustín Acasaguastlán', 'departamento_id' => 5]);
    DB::table('municipio')->insert(['nombre' => 'San Antonio La Paz', 'departamento_id' => 5]);
    DB::table('municipio')->insert(['nombre' => 'San Cristóbal Acasaguastlán', 'departamento_id' => 5]);
    DB::table('municipio')->insert(['nombre' => 'Sanarate', 'departamento_id' => 5]);
    DB::table('municipio')->insert(['nombre' => 'Sansare', 'departamento_id' => 5]);

      // Escuintla
      DB::table('municipio')->insert(['nombre' => 'Escuintla', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'Guanagazapa', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'Iztapa', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'La Democracia', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'La Gomera', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'Masagua', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'Nueva Concepción', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'Palín', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'San José', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'San Vicente Pacaya', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'Santa Lucía Cotzumalguapa', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'Siquinalá', 'departamento_id' => 6]);
    DB::table('municipio')->insert(['nombre' => 'Tiquisate', 'departamento_id' => 6]);

      // Guatemala
      DB::table('municipio')->insert(['nombre' => 'Amatitlán', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'Chinautla', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'Chuarrancho', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'Guatemala', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'Fraijanes', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'Mixco', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'Palencia', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'San José del Golfo', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'San José Pinula', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'San Juan Sacatepéquez', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'San Miguel Petapa', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'San Pedro Ayampuc', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'San Pedro Sacatepéquez', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'San Raymundo', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'Santa Catarina Pinula', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'Villa Canales', 'departamento_id' => 7]);
    DB::table('municipio')->insert(['nombre' => 'Villa Nueva', 'departamento_id' => 7]);

      // Huehuetenango
      DB::table('municipio')->insert(['nombre' => 'Aguacatán', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Chiantla', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Colotenango', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Concepción Huista', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Cuilco', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Huehuetenango', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Jacaltenango', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'La Democracia', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'La Libertad', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Malacatancito', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Nentón', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Antonio Huista', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Gaspar Ixchil', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Ildefonso Ixtahuacán', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Juan Atitán', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Juan Ixcoy', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Mateo Ixtatán', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Miguel Acatán', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Pedro Nécta', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Pedro Soloma', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Rafael La Independencia', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Rafael Pétzal', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Sebastián Coatán', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'San Sebastián Huehuetenango', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Santa Ana Huista', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Santa Bárbara', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Santa Cruz Barillas', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Santa Eulalia', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Santiago Chimaltenango', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Tectitán', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Todos Santos Cuchumatán', 'departamento_id' => 8]);
    DB::table('municipio')->insert(['nombre' => 'Unión Cantinil', 'departamento_id' => 8]);

      // Izabal
      DB::table('municipio')->insert(['nombre' => 'El Estor', 'departamento_id' => 9]);
    DB::table('municipio')->insert(['nombre' => 'Livingston', 'departamento_id' => 9]);
    DB::table('municipio')->insert(['nombre' => 'Los Amates', 'departamento_id' => 9]);
    DB::table('municipio')->insert(['nombre' => 'Morales', 'departamento_id' => 9]);
    DB::table('municipio')->insert(['nombre' => 'Puerto Barrios', 'departamento_id' => 9]);

      // Jalapa
      DB::table('municipio')->insert(['nombre' => 'Jalapa', 'departamento_id' => 10]);
    DB::table('municipio')->insert(['nombre' => 'Mataquescuintla', 'departamento_id' => 10]);
    DB::table('municipio')->insert(['nombre' => 'Monjas', 'departamento_id' => 10]);
    DB::table('municipio')->insert(['nombre' => 'San Carlos Alzatate', 'departamento_id' => 10]);
    DB::table('municipio')->insert(['nombre' => 'San Luis Jilotepeque', 'departamento_id' => 10]);
    DB::table('municipio')->insert(['nombre' => 'San Manuel Chaparrón', 'departamento_id' => 10]);
    DB::table('municipio')->insert(['nombre' => 'San Pedro Pinula', 'departamento_id' => 10]);

      // Jutiapa
      DB::table('municipio')->insert(['nombre' => 'Agua Blanca', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Asunción Mita', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Atescatempa', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Comapa', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Conguaco', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'El Adelanto', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'El Progreso', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Jalpatagua', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Jerez', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Jutiapa', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Moyuta', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Pasaco', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Quesada', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'San José Acatempa', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Santa Catarina Mita', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Yupiltepeque', 'departamento_id' => 11]);
    DB::table('municipio')->insert(['nombre' => 'Zapotitlán', 'departamento_id' => 11]);

      // Petén
      DB::table('municipio')->insert(['nombre' => 'Dolores', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'El Chal', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'Ciudad Flores', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'La Libertad', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'Las Cruces', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'Melchor de Mencos', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'Poptún', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'San Andrés', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'San Benito', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'San Francisco', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'San José', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'San Luis', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'Santa Ana', 'departamento_id' => 12]);
    DB::table('municipio')->insert(['nombre' => 'Sayaxché', 'departamento_id' => 12]);

      // Quetzaltenango
      DB::table('municipio')->insert(['nombre' => 'Almolonga', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Cabricán', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Cajolá', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Cantel', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Coatepeque', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Colomba Costa Cuca', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Concepción Chiquirichapa', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'El Palmar', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Flores Costa Cuca', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Génova', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Huitán', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'La Esperanza', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Olintepeque', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Palestina de Los Altos', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Quetzaltenango', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Salcajá', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'San Carlos Sija', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'San Francisco La Unión', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'San Juan Ostuncalco', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'San Martín Sacatepéquez', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'San Mateo', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'San Miguel Sigüilá', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Sibilia', 'departamento_id' => 13]);
    DB::table('municipio')->insert(['nombre' => 'Zunil', 'departamento_id' => 13]);

      // Quiché
      DB::table('municipio')->insert(['nombre' => 'Canillá', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Chajul', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Chicamán', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Chiché', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Chichicastenango', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Chinique', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Cunén', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Ixcán Playa Grande', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Joyabaj', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Nebaj', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Pachalum', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Patzité', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Sacapulas', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'San Andrés Sajcabajá', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'San Antonio Ilotenango', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'San Bartolomé Jocotenango', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'San Juan Cotzal', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'San Pedro Jocopilas', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Santa Cruz del Quiché', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Uspantán', 'departamento_id' => 14]);
    DB::table('municipio')->insert(['nombre' => 'Zacualpa', 'departamento_id' => 14]);

      // Retalhuleu
      DB::table('municipio')->insert(['nombre' => 'Champerico', 'departamento_id' => 15]);
    DB::table('municipio')->insert(['nombre' => 'El Asintal', 'departamento_id' => 15]);
    DB::table('municipio')->insert(['nombre' => 'Nuevo San Carlos', 'departamento_id' => 15]);
    DB::table('municipio')->insert(['nombre' => 'Retalhuleu', 'departamento_id' => 15]);
    DB::table('municipio')->insert(['nombre' => 'San Andrés Villa Seca', 'departamento_id' => 15]);
    DB::table('municipio')->insert(['nombre' => 'San Felipe Reu', 'departamento_id' => 15]);
    DB::table('municipio')->insert(['nombre' => 'San Martín Zapotitlán', 'departamento_id' => 15]);
    DB::table('municipio')->insert(['nombre' => 'San Sebastián', 'departamento_id' => 15]);
    DB::table('municipio')->insert(['nombre' => 'Santa Cruz Muluá', 'departamento_id' => 15]);

      // Sacatepéquez
      DB::table('municipio')->insert(['nombre' => 'Alotenango', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Ciudad Vieja', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Jocotenango', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Antigua Guatemala', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Magdalena Milpas Altas', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Pastores', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'San Antonio Aguas Calientes', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'San Bartolomé Milpas Altas', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'San Lucas Sacatepéquez', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'San Miguel Dueñas', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Santa Catarina Barahona', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Santa Lucía Milpas Altas', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Santa María de Jesús', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Santiago Sacatepéquez', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Santo Domingo Xenacoj', 'departamento_id' => 16]);
    DB::table('municipio')->insert(['nombre' => 'Sumpango', 'departamento_id' => 16]);

      // San Marcos
    DB::table('municipio')->insert(['nombre' => 'Ayutla', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Catarina', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Comitancillo', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Concepción Tutuapa', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'El Quetzal', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'El Tumbador', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Esquipulas Palo Gordo', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Ixchiguán', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'La Blanca', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'La Reforma', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Malacatán', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Nuevo Progreso', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Ocós', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Pajapita', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Río Blanco', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'San Antonio Sacatepéquez', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'San Cristóbal Cucho', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'San José El Rodeo', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'San José Ojetenam', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'San Lorenzo', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'San Marcos', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'San Miguel Ixtahuacán', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'San Pablo', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'San Pedro Sacatepéquez', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'San Rafael Pie de la Cuesta', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Sibinal', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Sipacapa', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Tacaná', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Tajumulco', 'departamento_id' => 17]);
    DB::table('municipio')->insert(['nombre' => 'Tejutla', 'departamento_id' => 17]);

    // Santa Rosa
    DB::table('municipio')->insert(['nombre' => 'Barberena', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Casillas', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Chiquimulilla', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Cuilapa', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Guazacapán', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Nueva Santa Rosa', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Oratorio', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Pueblo Nuevo Viñas', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'San Juan Tecuaco', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'San Rafael las Flores', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Santa Cruz Naranjo', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Santa María Ixhuatán', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Santa Rosa de Lima', 'departamento_id' => 18]);
    DB::table('municipio')->insert(['nombre' => 'Taxisco', 'departamento_id' => 18]);

    // Sololá
    DB::table('municipio')->insert(['nombre' => 'Concepción', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'Nahualá', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'Panajachel', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'San Andrés Semetabaj', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'San Antonio Palopó', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'San José Chacayá', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'San Juan La Laguna', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'San Lucas Tolimán', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'San Marcos La Laguna', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'San Pablo La Laguna', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'San Pedro La Laguna', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'Santa Catarina Ixtahuacán', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'Santa Catarina Palopó', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'Santa Clara La Laguna', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'Santa Cruz La Laguna', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'Santa Lucía Utatlán', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'Santa María Visitación', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'Santiago Atitlán', 'departamento_id' => 19]);
    DB::table('municipio')->insert(['nombre' => 'Sololá', 'departamento_id' => 19]);

    // Suchitepéquez
    DB::table('municipio')->insert(['nombre' => 'Chicacao', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'Cuyotenango', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'Mazatenango', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'Patulul', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'Pueblo Nuevo', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'Río Bravo', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'Samayac', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'San Antonio Suchitepéquez', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'San Bernardino', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'San Francisco Zapotitlán', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'San Gabriel', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'San José El Idolo', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'San José La Maquina', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'San Juan Bautista', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'San Lorenzo', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'San Miguel Panán', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'San Pablo Jocopilas', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'Santa Bárbara', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'Santo Domingo Suchitepéquez', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'Santo Tomás La Unión', 'departamento_id' => 20]);
    DB::table('municipio')->insert(['nombre' => 'Zunilito', 'departamento_id' => 20]);

    // Totonicapán
    DB::table('municipio')->insert(['nombre' => 'Momostenango', 'departamento_id' => 21]);
    DB::table('municipio')->insert(['nombre' => 'San Andrés Xecul', 'departamento_id' => 21]);
    DB::table('municipio')->insert(['nombre' => 'San Bartolo', 'departamento_id' => 21]);
    DB::table('municipio')->insert(['nombre' => 'San Cristóbal Totonicapán', 'departamento_id' => 21]);
    DB::table('municipio')->insert(['nombre' => 'San Francisco El Alto', 'departamento_id' => 21]);
    DB::table('municipio')->insert(['nombre' => 'Santa Lucía La Reforma', 'departamento_id' => 21]);
    DB::table('municipio')->insert(['nombre' => 'Santa María Chiquimula', 'departamento_id' => 21]);
    DB::table('municipio')->insert(['nombre' => 'Totonicapán', 'departamento_id' => 21]);

    // Zacapa
    DB::table('municipio')->insert(['nombre' => 'Cabañas', 'departamento_id' => 22]);
    DB::table('municipio')->insert(['nombre' => 'Estanzuela', 'departamento_id' => 22]);
    DB::table('municipio')->insert(['nombre' => 'Gualán', 'departamento_id' => 22]);
    DB::table('municipio')->insert(['nombre' => 'Huité', 'departamento_id' => 22]);
    DB::table('municipio')->insert(['nombre' => 'La Unión', 'departamento_id' => 22]);
    DB::table('municipio')->insert(['nombre' => 'Río Hondo', 'departamento_id' => 22]);
    DB::table('municipio')->insert(['nombre' => 'San Diego', 'departamento_id' => 22]);
    DB::table('municipio')->insert(['nombre' => 'San Jorge', 'departamento_id' => 22]);
    DB::table('municipio')->insert(['nombre' => 'Teculután', 'departamento_id' => 22]);
    DB::table('municipio')->insert(['nombre' => 'Usumatlán', 'departamento_id' => 22]);
    DB::table('municipio')->insert(['nombre' => 'Zacapa', 'departamento_id' => 22]);
    }
}
