namespace IssueTracker.Controllers
{
    using Microsoft.AspNetCore.Mvc;
    using IssueTracker.Models;
    using System.Linq;

    public class IssueController : Controller
    {
        private readonly IssueDbContext context;

        public IssueController(IssueDbContext context)
        {
            this.context = context;
        }

        [HttpGet]
        [Route("")]
        public IActionResult Index()
        {
            var issues = context.Issues.ToList();
            return View(issues);
        }

        [HttpGet]
        [Route("create")]
        public IActionResult Create()
        {
           
            return View();
            
        }

        [HttpPost]
        [Route("create")]
        public IActionResult Create(Issue issue)
        {
            context.Issues.Add(issue);
            context.SaveChanges();
            return RedirectToAction("Index");
        }

        [HttpGet]
        [Route("edit/{id}")]
        public IActionResult Edit(int id)
        {
            Issue issue = context
                .Issues
                .FirstOrDefault(i => i.Id == id);

            return View(issue);
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public IActionResult EditConfirm(int id, Issue issueModel)
        {
            context.Issues.Update(issueModel);
            context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }

        [HttpGet]
        [Route("delete/{id}")]
        public IActionResult Delete(int id)
        {
            Issue issue = context
                 .Issues
                 .FirstOrDefault(i => i.Id == id);

            return View(issue);
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public IActionResult DeleteConfirm(int id, Issue issueModel)
        {
            context.Issues.Remove(issueModel);
            context.SaveChanges();
            return RedirectToAction(nameof(Index));
        }
    }
}
