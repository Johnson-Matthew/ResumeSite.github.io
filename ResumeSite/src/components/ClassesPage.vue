<template>
    <br><br>
    <h1 class="huge-title">Classes.</h1>
    <v-row>
        <v-col cols="2" class="md-5"></v-col>
            <v-col cols="8" class="md-5">
            <v-data-table :items="items">
            <template v-slot:header="{ column }">
            {{ column.title.toUpperCase() }}
            </template>
            </v-data-table>
            </v-col>
        <v-col cols="2" class="md-5"></v-col>
    </v-row>
    <br><br>
    <h1 class="huge-title">Skills.</h1>
</template>

<style scoped>
.footer{
  position:absolute;
  bottom:-1;
  width:100%;
  height:100px; 
  text-align: center;
}

.huge-title {
  font-size: 12em; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.card-title {
  font-size: 3ex; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.sub-title {
  font-size: 2ex; 
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
}

.blurb{
  text-align: center;
}

.rounded-card{
  justify-content: center;
  border-radius: 30px;
}
</style>


<script>
  export default {
    data: () => ({
      items: [
        {
          'Course Name': 'Computer Info Science Concepts CONCURRENT',
          'Course Number': 'CS 1093',
          Semester: 'Fall 2019',
          Grade: 'A'
        },
        {
          'Course Name': 'Intro to Mobile Apps CONCURRENT',
          'Course Number': 'CS 1073',
          Semester: 'Spring 2020',
          Grade: 'A'
        },
        {
          'Course Name': 'Foundations of Programming I CONCURRENT',
          'Course Number': 'CS 1014',
          Semester: 'Fall 2020',
          Grade: 'A'
        },
        {
          'Course Name': 'Composition I CONCURRENT',
          'Course Number': 'ENGL 1203',
          Semester: 'Fall 2020',
          Grade: 'B'
        },
        {
          'Course Name': 'Composition II CONCURRENT',
          'Course Number': 'ENGL 1213',
          Semester: 'Spring 2021',
          Grade: 'B'
        },
        {
          'Course Name': 'Foundations of Programming II CONCURRENT',
          'Course Number': 'CS 1024',
          Semester: 'Spring 2021',
          Grade: 'B'
        },
        {
          'Course Name': 'Foundations of Networking',
          'Course Number': 'CS 1044',
          Semester: 'Fall 2021',
          Grade: 'B'
        },
        {
          'Course Name': 'Personal Financial Applications',
          'Course Number': 'FIN 1521',
          Semester: 'Fall 2021',
          Grade: 'A'
        },
        {
          'Course Name': 'Introduction to Film',
          'Course Number': 'HUMN 2663',
          Semester: 'Fall 2021',
          Grade: 'A'
        },
        {
          'Course Name': 'Plane Trigonometry',
          'Course Number': 'MATH 1453',
          Semester: 'Fall 2021',
          Grade: 'A'
        },
        {
          'Course Name': 'Introduction to Speech',
          'Course Number': 'SPCH 1203',
          Semester: 'Fall 2021',
          Grade: 'A'
        },
        {
          'Course Name': 'College Preperation for CS',
          'Course Number': 'STEM 1001',
          Semester: 'Fall 2021',
          Grade: 'A'
        },
        {
          'Course Name': 'Web Systems',
          'Course Number': 'CS 2033',
          Semester: 'Spring 2022',
          Grade: 'A'
        },
        {
          'Course Name': 'Foundations of Cyber Security',
          'Course Number': 'CS 2053',
          Semester: 'Spring 2022',
          Grade: 'A'
        },
        {
          'Course Name': 'Physical Geology Lab',
          'Course Number': 'GEOL 1251',
          Semester: 'Spring 2022',
          Grade: 'A'
        },
        {
          'Course Name': 'Physical Geology',
          'Course Number': 'GEOL 1253',
          Semester: 'Spring 2022',
          Grade: 'B'
        },
        {
          'Course Name': 'Calculus I',
          'Course Number': 'MATH 2804',
          Semester: 'Spring 2022',
          Grade: 'B'
        },
        {
          'Course Name': 'Total Fitness',
          'Course Number': 'PHYE 1621',
          Semester: 'Spring 2022',
          Grade: 'A'
        },
        {
          'Course Name': 'College Chemistry I',
          'Course Number': 'CHEM 1403',
          Semester: 'Fall 2022',
          Grade: 'A'
        },
        {
          'Course Name': 'College Chemistry I Lab',
          'Course Number': 'CHEM 1401',
          Semester: 'Fall 2022',
          Grade: 'A'
        },
        {
          'Course Name': 'World Regional Geography',
          'Course Number': 'GEOG 2753',
          Semester: 'Fall 2022',
          Grade: 'A'
        },
        {
          'Course Name': 'U.S. History II',
          'Course Number': 'HIST 2763',
          Semester: 'Fall 2022',
          Grade: 'A'
        },
        {
          'Course Name': 'Calculus II',
          'Course Number': 'MATH 2854',
          Semester: 'Fall 2022',
          Grade: 'B'
        },
        {
          'Course Name': 'World Religions',
          'Course Number': 'RELI 2303',
          Semester: 'Fall 2022',
          Grade: 'B'
        },
        {
          'Course Name': 'Data Structures',
          'Course Number': 'CS 2003',
          Semester: 'Spring 2023',
          Grade: 'A'
        },
        {
          'Course Name': 'CyberOps Networking Security',
          'Course Number': 'CS 4503',
          Semester: 'Spring 2023',
          Grade: 'A'
        },
        {
          'Course Name': 'World Civilizations Since 1500',
          'Course Number': 'HIST 1133',
          Semester: 'Spring 2023',
          Grade: 'A'
        },
        {
          'Course Name': 'Discrete Mathematics I',
          'Course Number': 'MATH 2443',
          Semester: 'Spring 2023',
          Grade: 'B'
        },
        {
          'Course Name': 'Reason Across Disiplines',
          'Course Number': 'RHIL 3103',
          Semester: 'Spring 2023',
          Grade: 'A'
        },
        {
          'Course Name': 'Computer Architecture',
          'Course Number': 'CS 3033',
          Semester: 'Fall 2023',
          Grade: 'B'
        },
        {
          'Course Name': 'Database Systems',
          'Course Number': 'CS 3043',
          Semester: 'Fall 2023',
          Grade: 'A'
        },
        {
          'Course Name': 'Algorithms',
          'Course Number': 'CS 3103',
          Semester: 'Fall 2023',
          Grade: 'B'
        },
        {
          'Course Name': 'Ethics and Professional Practice',
          'Course Number': 'CS 4033',
          Semester: 'Fall 2023',
          Grade: 'A'
        },
        {
          'Course Name': 'Discrete Mathematics II',
          'Course Number': 'MATH 3303',
          Semester: 'Fall 2023',
          Grade: 'B'
        },
        {
          'Course Name': 'Operating Systems',
          'Course Number': 'CS 3053',
          Semester: 'Spring 2024',
          Grade: 'A'
        },
        {
          'Course Name': 'Software Engineering',
          'Course Number': 'CS 4003',
          Semester: 'Spring 2024',
          Grade: 'A'
        },
        {
          'Course Name': 'Combinatorics',
          'Course Number': 'MATH 4443',
          Semester: 'Spring 2024',
          Grade: 'A'
        },
        {
          'Course Name': 'Computer Science Internship',
          'Course Number': 'CS 4913',
          Semester: 'Spring 2024',
          Grade: 'A'
        },
        {
          'Course Name': 'Artificial Intelligence',
          'Course Number': 'CS 3113',
          Semester: 'Summer 2024',
          Grade: '-'
        },
        {
          'Course Name': 'Formal Languages',
          'Course Number': 'CS 4043',
          Semester: 'Summer 2024',
          Grade: '-'
        },
        {
          'Course Name': 'Distributed Systems',
          'Course Number': 'CS 3003',
          Semester: 'Fall 2024',
          Grade: '-'
        },
        {
          'Course Name': 'Senior Capstone',
          'Course Number': 'CS 4023',
          Semester: 'Fall 2024',
          Grade: '-'
        },
        {
          'Course Name': 'Applied Linear Algebra',
          'Course Number': 'MATH 3203',
          Semester: 'Fall 2024',
          Grade: '-'
        },
        {
          'Course Name': 'Information Tech Internship',
          'Course Number': 'CS 4913',
          Semester: 'Fall 2024',
          Grade: '-'
        },
      ],
    }),
  }
</script>
