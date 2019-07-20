using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace TODOList.Models
{
    using Microsoft.EntityFrameworkCore;

    public class TaskDBContext : DbContext
    {
        public DbSet<Task> Tasks { get; set; }

        public TaskDBContext()
        {
            this.Database.EnsureCreated();
        }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            optionsBuilder.UseMySQL("server=localhost;database=todo;user=root;SSLMode=none");
        }
    }
}
